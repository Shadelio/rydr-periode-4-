<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/static-data.php';


$search_query = '';
if (isset($_GET['brand']) && !empty($_GET['brand'])) {
    $search_query = strtolower($_GET['brand']);
    
    $cars = array_filter($cars, function($car) use ($search_query) {
        return strpos(strtolower($car['Auto']), $search_query) !== false;
    });
}

?>

<main>
    <div class="aanbod-container">
        <div class="aanbod-content" style="width: 100%;">
            <h2 class="section-title">Zoekresultaten voor "<?= htmlspecialchars($_GET['brand']) ?>"</h2>
            <p><?= count($cars) ?> auto's gevonden</p>
            <div class="cars">
                <?php if (!empty($cars)): ?>
                    <?php foreach ($cars as $car): ?>
                        <div class="car-details">
                            <div class="car-brand">
                                <h3><?= htmlspecialchars($car['Auto']) ?></h3>
                                <div class="car-type"><?= htmlspecialchars($car['Type']) ?></div>
                            </div>

                            <?php if (isset($_SESSION['id'])): ?>
                                <div class="like-button">
                                    <a href="/pages/ons-aanbod.php?like=<?= $car['Id'] ?>" class="like-link <?= (isset($_SESSION['likes']) && in_array($car['Id'], $_SESSION['likes'])) ? 'liked' : '' ?>">
                                        <span class="heart-icon">♥</span>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <img src="/assets/images/products/car_<?= $car['Id'] ?>.svg" alt="<?= htmlspecialchars($car['Auto']) ?>">

                            <div class="car-specification">
                                <span><img src="/assets/images/icons/gas-station.svg" alt=""> <?= $car['Liter'] ?>L</span>
                                <span><img src="/assets/images/icons/car.svg" alt=""> <?= $car['Versnellingsbak'] ?></span>
                                <span><img src="/assets/images/icons/profile-2user.svg" alt=""> <?= $car['Passagiers'] ?> Personen</span>
                            </div>

                            <div class="rent-details">
                                <span><span class="font-weight-bold">€<?= number_format($car['Prijs'], 2, ',', '.') ?></span></span>
                                <a href="/pages/car-detail.php?id=<?= $car['Id'] ?>" class="button-primary">Bekijk nu</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Geen auto's gevonden die overeenkomen met uw zoekopdracht.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<main>
<?php 

$search_query = isset($_GET['brand']) ? trim($_GET['brand']) : '';


$cars = [
    [
        'brand' => 'Koenigsegg',
        'type' => 'Sport',
        'image' => 0,
        'fuel' => '90l',
        'transmission' => 'Schakel',
        'passengers' => '2 Personen',
        'price' => '€249,00'
    ],
    [
        'brand' => 'Lamborghini',
        'type' => 'Sport',
        'image' => 1,
        'fuel' => '80l',
        'transmission' => 'Automaat',
        'passengers' => '2 Personen',
        'price' => '€299,00'
    ],
    [
        'brand' => 'Audi',
        'type' => 'SUV',
        'image' => 2,
        'fuel' => '70l',
        'transmission' => 'Automaat',
        'passengers' => '5 Personen',
        'price' => '€149,00'
    ],
    [
        'brand' => 'BMW',
        'type' => 'Sedan',
        'image' => 3,
        'fuel' => '65l',
        'transmission' => 'Automaat',
        'passengers' => '5 Personen',
        'price' => '€179,00'
    ],
    [
        'brand' => 'Mercedes',
        'type' => 'Sedan',
        'image' => 4,
        'fuel' => '75l',
        'transmission' => 'Automaat',
        'passengers' => '5 Personen',
        'price' => '€189,00'
    ],
    [
        'brand' => 'Volkswagen',
        'type' => 'Hatchback',
        'image' => 5,
        'fuel' => '50l',
        'transmission' => 'Schakel',
        'passengers' => '5 Personen',
        'price' => '€99,00'
    ],
    [
        'brand' => 'Toyota',
        'type' => 'Hatchback',
        'image' => 6,
        'fuel' => '45l',
        'transmission' => 'Schakel',
        'passengers' => '5 Personen',
        'price' => '€89,00'
    ],
    [
        'brand' => 'Ferrari',
        'type' => 'Sport',
        'image' => 7,
        'fuel' => '85l',
        'transmission' => 'Automaat',
        'passengers' => '2 Personen',
        'price' => '€349,00'
    ]
];


function search_cars_by_brand($cars, $search_term) {
    if (empty($search_term)) {
        return $cars;
    }
    
    return array_filter($cars, function($car) use ($search_term) {
        
        return stripos($car['brand'], $search_term) !== false;
    });
}


$search_results = search_cars_by_brand($cars, $search_query);
?>

<div class="search-results">
    <div class="search-header">
        <h1>Zoekresultaten</h1>
        
        <?php if (!empty($search_query)): ?>
            <p class="search-info">
                <?php echo count($search_results); ?> auto's gevonden voor "<?php echo htmlspecialchars($search_query); ?>"
            </p>
        <?php endif; ?>
        
        <div class="search-form">
            <form action="/pages/zoeken.php" method="GET">
                <div class="search-input">
                    <input type="search" name="brand" id="brand" value="<?php echo htmlspecialchars($search_query); ?>" placeholder="Zoek op automerk..." required>
                    <button type="submit" class="button-primary">Zoeken</button>
                </div>
            </form>
        </div>
    </div>
    
    <?php if (empty($search_results)): ?>
        <div class="no-results">
            <p>Geen auto's gevonden voor "<?php echo htmlspecialchars($search_query); ?>".</p>
            <p>Probeer een andere zoekopdracht of bekijk <a href="/pages/ons-aanbod.php">ons complete aanbod</a>.</p>
        </div>
    <?php else: ?>
        <div class="cars">
            <?php foreach ($search_results as $car): ?>
                <div class="car-details">
                    <div class="car-brand">
                        <h3><?= $car['brand'] ?></h3>
                        <div class="car-type">
                            <?= $car['type'] ?>
                        </div>
                    </div>
                    <img src="/assets/images/products/car%20(<?= $car['image'] ?>).svg" alt="">
                    <div class="car-specification">
                        <span><img src="/assets/images/icons/gas-station.svg" alt=""><?= $car['fuel'] ?></span>
                        <span><img src="/assets/images/icons/car.svg" alt=""><?= $car['transmission'] ?></span>
                        <span><img src="/assets/images/icons/profile-2user.svg" alt=""><?= $car['passengers'] ?></span>
                    </div>
                    <div class="rent-details">
                        <span><span class="font-weight-bold"><?= $car['price'] ?></span> </span>
                        <a href="/car-detail" class="button-primary">Bekijk nu</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</main>

<?php require "includes/footer.php"; ?>
