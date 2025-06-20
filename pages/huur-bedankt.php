<?php require $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$rented_car = $_SESSION['rented_car'] ?? null;

unset($_SESSION['rented_car']);
?>
<main>
    <div class="bedankt-page" style="text-align:center;padding:3rem 1rem;max-width:600px;margin:0 auto;">
        <?php if ($rented_car): ?>
            <h1>Huur succesvol!</h1>
            <p>Bedankt voor het huren van de <strong><?= htmlspecialchars($rented_car['Auto']) ?></strong>!</p>
            <p>We hebben je aanvraag goed ontvangen en wensen je alvast een goede reis.</p>
            <p>Je ontvangt spoedig een bevestiging via e-mail.</p>
        <?php else: ?>
            <h1>Bedankt!</h1>
            <p>Bedankt voor je aanvraag! We nemen zo snel mogelijk contact met je op.</p>
        <?php endif; ?>
        <a href="/pages/ons-aanbod.php" class="button-primary" style="margin-top:2rem;display:inline-block;">Terug naar ons aanbod</a>
    </div>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>
