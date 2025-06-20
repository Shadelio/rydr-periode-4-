<?php require "includes/header.php"; ?>

<main>
    <div class="visie-page">
        <div class="visie-header">
            <h1>Onze Visie</h1>
            <p class="visie-intro">Bij Rydr geloven we in een toekomst waarin autohuur toegankelijk, duurzaam en gebruiksvriendelijk is voor iedereen.</p>
        </div>

        <div class="visie-grid">
            <div class="visie-card">
                <div class="visie-icon">🚗</div>
                <h3>Toegankelijkheid</h3>
                <p>We maken autohuur toegankelijk voor iedereen door transparante prijzen, eenvoudige processen en een gebruiksvriendelijk platform.</p>
            </div>

            <div class="visie-card">
                <div class="visie-icon">🌱</div>
                <h3>Duurzaamheid</h3>
                <p>We streven naar een duurzame toekomst door te investeren in elektrische voertuigen en milieuvriendelijke praktijken.</p>
            </div>

            <div class="visie-card">
                <div class="visie-icon">💡</div>
                <h3>Innovatie</h3>
                <p>We blijven innoveren om de beste service te bieden, met de nieuwste technologieën en gebruikerservaringen.</p>
            </div>
        </div>

        <div class="visie-mission">
            <h2>Onze Missie</h2>
            <p>Rydr wil de manier waarop mensen denken over autohuur veranderen. We geloven dat iedereen toegang zou moeten hebben tot betrouwbaar en betaalbaar vervoer, zonder de zorgen van autobezit.</p>
        </div>

        <div class="visie-values">
            <h2>Onze Kernwaarden</h2>
            <div class="values-grid">
                <div class="value-item">
                    <h4>Klantgerichtheid</h4>
                    <p>De klant staat centraal in alles wat we doen. We luisteren naar feedback en verbeteren continu onze service.</p>
                </div>
                <div class="value-item">
                    <h4>Transparantie</h4>
                    <p>We zijn open en eerlijk in onze communicatie, prijzen en processen.</p>
                </div>
                <div class="value-item">
                    <h4>Kwaliteit</h4>
                    <p>We streven naar de hoogste kwaliteit in onze dienstverlening en voertuigen.</p>
                </div>
                <div class="value-item">
                    <h4>Innovatie</h4>
                    <p>We blijven voorop lopen in technologie en service-innovatie.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
.visie-page {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2.5rem 1rem 3rem 1rem;
}
.visie-header {
    text-align: center;
    margin-bottom: 2.5rem;
}
.visie-header h1 {
    font-size: 2.7rem;
    color: #0099ff;
    margin-bottom: 0.7rem;
    letter-spacing: -1px;
}
.visie-intro {
    color: #444;
    font-size: 1.2rem;
    margin-bottom: 0;
}
.visie-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
    margin-bottom: 3rem;
}
.visie-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 4px 16px rgba(44, 62, 80, 0.08);
    padding: 2rem 1.5rem 1.5rem 1.5rem;
    text-align: center;
    flex: 1 1 260px;
    min-width: 240px;
    max-width: 320px;
    transition: box-shadow 0.2s;
}
.visie-card:hover {
    box-shadow: 0 8px 32px rgba(44, 62, 80, 0.15);
}
.visie-icon {
    font-size: 2.5rem;
    margin-bottom: 0.7rem;
}
.visie-card h3 {
    color: #0099ff;
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
}
.visie-card p {
    color: #555;
    font-size: 1rem;
}
.visie-mission {
    background: #f5faff;
    border-radius: 12px;
    padding: 2rem 1.5rem;
    margin-bottom: 2.5rem;
    text-align: center;
    box-shadow: 0 2px 8px rgba(44, 62, 80, 0.06);
}
.visie-mission h2 {
    color: #2B2B2B;
    margin-bottom: 0.7rem;
}
.visie-mission p {
    color: #444;
    font-size: 1.1rem;
}
.visie-values {
    margin-top: 2.5rem;
}
.visie-values h2 {
    color: #2B2B2B;
    margin-bottom: 1.2rem;
    text-align: center;
}
.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1.5rem;
}
.value-item {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(44, 62, 80, 0.06);
    padding: 1.5rem 1rem;
    text-align: center;
}
.value-item h4 {
    color: #0099ff;
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}
.value-item p {
    color: #555;
    font-size: 0.98rem;
}
@media (max-width: 700px) {
    .visie-grid {
        flex-direction: column;
        gap: 1.2rem;
    }
    .visie-page {
        padding: 1.2rem 0.2rem 2rem 0.2rem;
    }
}
</style>

<?php require "includes/footer.php"; ?>
