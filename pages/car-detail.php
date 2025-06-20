<?php
require $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/static-data.php"; 


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $car_id_to_rent = $_GET['id'];
    
    $rented_car_array = array_filter($cars, function($c) use ($car_id_to_rent) {
        return $c['Id'] == $car_id_to_rent;
    });
    if (!empty($rented_car_array)) {
        $rented_car = reset($rented_car_array);
        $_SESSION['rented_car'] = $rented_car; 
        header("Location: /pages/huur-bedankt.php");
        exit;
    }
}


$id = $_GET['id'] ?? null;
$car = null;


if ($id !== null && is_numeric($id)) {
    
    $found_cars = array_filter($cars, function($c) use ($id) {
        return $c['Id'] == $id;
    });

    if (!empty($found_cars)) {
        
        $car = reset($found_cars);
    }
}
?>


<div class="grid">
    <div class="row">
        <div class="advertorial">
            <h2>Sport auto met het beste design en snelheid</h2>
            <p>Veiligheid en comfort terwijl je rijdt in een futuristische en elegante auto.</p>
            <img src="/assets/images/products/car_<?= $car['Id'] ?>.svg" alt="<?= htmlspecialchars($car['Auto']) ?>">

            <img src="../assets/images/header-circle-background.svg" alt="" class="background-header-element">
        </div>
    </div>

    <?php if ($car): ?>
        <div class="row white-background">
            <h2><?= htmlspecialchars($car['Auto']) ?></h2>
            <div class="rating">
                <span class="stars stars-4"></span>
                <span>440+ reviewers</span>
            </div>
            <p><?= htmlspecialchars($car['Auto']) ?> is een uitstekende keuze voor sportief rijden met comfort en prestaties.</p>

            <div class="car-type">
                <div class="grid">
                    <div class="row">
                        <span class="accent-color">Type Car</span>
                        <span><?= htmlspecialchars($car['Type']) ?></span>
                    </div>
                    <div class="row">
                        <span class="accent-color">Capacity</span>
                        <span><?= htmlspecialchars($car['Passagiers']) ?> personen</span>
                    </div>
                </div>
                <div class="grid">
                    <div class="row">
                        <span class="accent-color">Steering</span>
                        <span><?= htmlspecialchars($car['Versnellingsbak']) ?></span>
                    </div>
                    <div class="row">
                        <span class="accent-color">Gasoline</span>
                        <span><?= htmlspecialchars($car['Liter']) ?>L</span>
                    </div>
                </div>
                <br>
                <div class="call-to-action">
                    <div class="row">
                        <span class="font-weight-bold">
                            €<?= number_format($car['Prijs'], 2, ',', '.') ?>
                        </span> / dag
                    </div>
                    <br>
                    <div class="rental-form">
                        <form action="/pages/car-detail.php?id=<?= $car['Id'] ?>" method="POST">
                            <h4>Betaalgegevens</h4>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="card-name">Naam op kaart</label>
                                    <input type="text" id="card-name" name="card-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="card-number">Kaartnummer</label>
                                    <input type="text" id="card-number" name="card-number" placeholder="0000 0000 0000 0000" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="expiry-date">Vervaldatum</label>
                                    <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/JJ" required>
                                </div>
                                <div class="form-group">
                                    <label for="cvc">CVC</label>
                                    <input type="text" id="cvc" name="cvc" placeholder="123" required>
                                </div>
                            </div>
                            <button type="submit" class="button-primary">Huur nu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="row white-background">
            <h2>Auto niet gevonden</h2>
            <p>De opgegeven auto bestaat niet in onze database. Ga terug en probeer opnieuw.</p>
        </div>
    <?php endif; ?>
</div>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>
