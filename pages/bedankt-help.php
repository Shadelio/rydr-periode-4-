<?php require_once __DIR__ . '/../includes/header.php'; ?>

<main class="thankyou-page">
    <div class="thankyou-container">
        <h1>Bedankt voor je bericht!</h1>
        <p>We hebben je vraag ontvangen en nemen zo spoedig mogelijk contact met je op.</p>
        <a href="/pages/home.php" class="home-link">Terug naar de homepage</a>
    </div>
</main>

<style>
.thankyou-page {
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f7f7f7;
}
.thankyou-container {
    background: #fff;
    padding: 2.5rem 2rem;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(44,62,80,0.07);
    text-align: center;
    max-width: 400px;
    margin: 0 auto;
}
.thankyou-container h1 {
    color: #0099ff;
    margin-bottom: 1rem;
}
.thankyou-container p {
    color: #333;
    margin-bottom: 2rem;
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