<?php require "../includes/header.php"; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$sollicitatie = $_SESSION['sollicitatie'] ?? null;
?>
<main>
    <div class="bedankt-page" style="text-align:center;padding:3rem 1rem;max-width:600px;margin:0 auto;">
        <h1>Bedankt voor je sollicitatie!</h1>
        <?php if ($sollicitatie): ?>
            <p>Bedankt <strong><?= htmlspecialchars($sollicitatie['naam']) ?></strong> voor je interesse in de functie <strong><?= htmlspecialchars($sollicitatie['functie']) ?></strong>!</p>
            <p>We hebben je sollicitatie goed ontvangen en nemen zo snel mogelijk contact met je op.</p>
        <?php else: ?>
            <p>Bedankt voor je sollicitatie! We nemen zo snel mogelijk contact met je op.</p>
        <?php endif; ?>
        <a href="/pages/vacatures.php" class="button-primary" style="margin-top:2rem;display:inline-block;">Terug naar vacatures</a>
    </div>
</main>
<?php require "../includes/footer.php"; ?> 