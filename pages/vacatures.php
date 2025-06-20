<?php require "includes/header.php"; ?>

<main>
    <div class="vacatures-page">
        <div class="vacatures-header">
            <h1>Vacatures bij Rydr</h1>
            <p class="vacatures-intro">Word onderdeel van ons innovatieve team en help ons de toekomst van autohuur vorm te geven.</p>
        </div>

        <div class="vacatures-grid">
            <div class="vacature-card">
                <div class="vacature-header">
                    <h3>Senior Software Developer</h3>
                    <span class="vacature-type">Full-time</span>
                </div>
                <div class="vacature-details">
                    <p class="vacature-location">📍 Amsterdam</p>
                    <p class="vacature-description">We zijn op zoek naar een ervaren software developer die ons helpt bij het bouwen van de volgende generatie autohuur platform.</p>
                    <ul class="vacature-requirements">
                        <li>5+ jaar ervaring met PHP en JavaScript</li>
                        <li>Ervaring met moderne frameworks (Laravel, Vue.js)</li>
                        <li>Sterke focus op code kwaliteit en testing</li>
                    </ul>
                </div>
                <span class="solliciteer-text">Solliciteren mogelijk</span>
            </div>

            <div class="vacature-card">
                <div class="vacature-header">
                    <h3>Customer Service Specialist</h3>
                    <span class="vacature-type">Full-time</span>
                </div>
                <div class="vacature-details">
                    <p class="vacature-location">📍 Rotterdam</p>
                    <p class="vacature-description">Help onze klanten met al hun vragen en zorg voor een uitstekende service ervaring.</p>
                    <ul class="vacature-requirements">
                        <li>Ervaring in klantenservice</li>
                        <li>Uitstekende communicatieve vaardigheden</li>
                        <li>Flexibel in werktijden</li>
                    </ul>
                </div>
                <span class="solliciteer-text">Solliciteren mogelijk</span>
            </div>

            <div class="vacature-card">
                <div class="vacature-header">
                    <h3>Operations Manager</h3>
                    <span class="vacature-type">Full-time</span>
                </div>
                <div class="vacature-details">
                    <p class="vacature-location">📍 Utrecht</p>
                    <p class="vacature-description">Leid ons operations team en zorg voor een soepele werking van onze autohuur diensten.</p>
                    <ul class="vacature-requirements">
                        <li>3+ jaar ervaring in operations management</li>
                        <li>Sterke leiderschapsvaardigheden</li>
                        <li>Ervaring in de automotive sector is een pré</li>
                    </ul>
                </div>
                <span class="solliciteer-text">Solliciteren mogelijk</span>
            </div>
        </div>

        <div class="vacatures-cta">
            <h2>Geen passende vacature gevonden?</h2>
            <p>We zijn altijd op zoek naar talent. Stuur ons een open sollicitatie!</p>
            <a href="mailto:careers@rydr.nl" class="button-primary">Stuur open sollicitatie</a>
        </div>
    </div>
</main>

<div style="text-align:center;margin:2.5rem 0 1.5rem 0;">
    <a href="#" class="button-primary" onclick="toggleForm('algemeen-form');return false;" style="font-size:1.2rem;padding:1rem 2.5rem;">Solliciteer nu</a>
</div>
<form id="algemeen-form" class="sollicitatie-form" action="/pages/solliciteer-handler.php" method="POST" style="display:none;max-width:400px;margin:0 auto 2rem auto;">
    <label for="functie">Functie</label>
    <select name="functie" id="functie" required style="width:100%;margin-bottom:1rem;">
        <option value="">Kies een functie</option>
        <option value="Senior Software Developer">Senior Software Developer</option>
        <option value="Customer Service Specialist">Customer Service Specialist</option>
        <option value="Operations Manager">Operations Manager</option>
        <option value="Open sollicitatie">Open sollicitatie</option>
    </select>
    <input type="text" name="naam" placeholder="Jouw naam" required style="width:100%;margin-bottom:1rem;">
    <input type="email" name="email" placeholder="Jouw e-mail" required style="width:100%;margin-bottom:1rem;">
    <textarea name="motivatie" placeholder="Waarom wil je bij ons werken?" required style="width:100%;margin-bottom:1rem;"></textarea>
    <button type="submit" class="button-primary" style="width:100%;">Verstuur sollicitatie</button>
</form>

<script>
function toggleForm(formId) {
    
    document.querySelectorAll('.sollicitatie-form').forEach(f => f.style.display = 'none');
   
    document.getElementById(formId).style.display = 'block';
}
</script>

<style>
.solliciteer-text {
    display: inline-block;
    color: #0099ff;
    font-weight: 600;
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    font-size: 1.05rem;
}
</style>

<?php require "includes/footer.php"; ?>
