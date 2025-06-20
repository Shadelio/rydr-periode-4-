<?php require_once __DIR__ . '/../includes/header.php'; ?>

<main>
    <div class="notfound-page">
        <h1>Deze pagina bestaat niet</h1>
        <p>De pagina die je zoekt is niet gevonden.</p>
        <a href="/index.php" class="home-link">Ga terug naar de homepage</a>
    </div>
</main>

<style>
.notfound-page {
    max-width: 400px;
    margin: 8vh auto 0 auto;
    padding: 2.5rem 1.2rem;
    text-align: center;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(44,62,80,0.07);
    font-family: 'Segoe UI', Arial, sans-serif;
}
.notfound-page h1 {
    color: #d32f2f;
    font-size: 1.5rem;
    margin-bottom: 0.7rem;
}
.notfound-page p {
    color: #666;
    margin-bottom: 1.5rem;
    font-size: 1.05rem;
}
.home-link {
    background: #0099ff;
    color: #fff;
    padding: 0.6rem 1.5rem;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: background 0.2s;
    display: inline-block;
}
.home-link:hover {
    background: #007acc;
}
</style>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
