<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/static-data.php';


$company_cars = array_filter($cars, function($car) {
    return $car['Bedrijfswagen'] === true;
});


$all_types = array_unique(array_column($company_cars, 'Type'));


$selectedCategories = [];
if (isset($_GET['category']) && !empty($_GET['category'])) {
    $selectedCategories = explode(',', $_GET['category']);
    
    $company_cars = array_filter($company_cars, function($car) use ($selectedCategories) {
        return in_array($car['Type'], $selectedCategories);
    });
}

?>

<main>
    <div class="aanbod-container">
        <div class="aanbod-sidebar">
            <div class="filter">
                <h2>Filter ons aanbod</h2>
                <form action="" method="GET">
                    <div class="filter-group">
                        <label for="category">Categorie:</label>
                        <select name="category" id="category">
                            <option value="">Alle categorieën</option>
                            <?php foreach ($all_types as $type): ?>
                                <option value="<?= htmlspecialchars($type) ?>" <?= in_array($type, $selectedCategories) ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($type) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="button-primary">Filter toepassen</button>
                    <?php if (!empty($selectedCategories)) : ?>
                        <a href="bedrijfswagens.php" class="button-secondary">Reset filter</a>
                    <?php endif; ?>
                </form>
            </div>
        </div>

        <div class="aanbod-content">
            <h2 class="section-title"><?= count($company_cars) ?> bedrijfswagens gevonden</h2>
            <div class="cars">
                <?php foreach ($company_cars as $car): ?>
                    <div class="car-details">
                        <div class="car-brand">
                            <h3><?= htmlspecialchars($car['Auto']) ?></h3>
                            <div class="car-type"><?= htmlspecialchars($car['Type']) ?></div>
                        </div>

                        <?php if (isset($_SESSION['id'])): ?>
                            <div class="like-button">
                                <a href="bedrijfswagens.php?<?= !empty($selectedCategories) ? 'category=' . urlencode(implode(',', $selectedCategories)) . '&' : '' ?>like=<?= $car['Id'] ?>" class="like-link <?= (isset($_SESSION['likes']) && in_array($car['Id'], $_SESSION['likes'])) ? 'liked' : '' ?>">
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
            </div>
        </div>
    </div>
</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
