<?php require "includes/header.php"; ?>

<main>
    <div class="team-page">
        <div class="team-header">
            <h1>Ons Team</h1>
            <p class="team-intro">Maak kennis met de mensen achter Rydr. Ons toegewijde team werkt elke dag aan het verbeteren van uw autohuur ervaring.</p>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="/assets/images/team/brian-mensah.png" alt="Brian Mensah" class="team-photo">
                <h3>Brian Mensah</h3>
                <p class="title">Operationeel Manager</p>
                <p class="bio">Brian zorgt ervoor dat alles op rolletjes loopt binnen het team en houdt van efficiëntie en teamwork.</p>
            </div>

            <div class="team-member">
                <img src="/assets/images/team/jasper-van-den-brink.png" alt="Jasper van den Brink" class="team-photo">
                <h3>Jasper van den Brink</h3>
                <p class="title">Technisch Specialist</p>
                <p class="bio">Jasper is onze technische kracht en zorgt voor innovatieve oplossingen binnen het platform.</p>
            </div>

            <div class="team-member">
                <img src="/assets/images/team/lotte-de-graaf.png" alt="Lotte de Graaf" class="team-photo">
                <h3>Lotte de Graaf</h3>
                <p class="title">Klantenservice</p>
                <p class="bio">Lotte staat altijd klaar voor onze klanten en zorgt voor een vriendelijke en professionele service.</p>
            </div>

            <div class="team-member">
                <img src="/assets/images/team/youssef-amrani.png" alt="Youssef Amrani" class="team-photo">
                <h3>Youssef Amrani</h3>
                <p class="title">Marketing & Communicatie</p>
                <p class="bio">Youssef brengt onze boodschap naar buiten en zorgt dat iedereen Rydr leert kennen.</p>
            </div>
        </div>

        <div class="team-cta">
            <h2>Word onderdeel van ons team</h2>
            <p>Ben je gepassioneerd over innovatie en klantenservice? Bekijk onze openstaande vacatures!</p>
            <a href="/pages/vacatures.php" class="button-primary">Bekijk vacatures</a>
        </div>
    </div>
</main>

<style>
.team-page {
    max-width: 900px;
    margin: 0 auto;
    padding: 2rem 1rem 2rem 1rem;
}
.team-header {
    text-align: center;
    margin-bottom: 2rem;
}
.team-header h1 {
    font-size: 2rem;
    color: #2B2B2B;
    margin-bottom: 0.3rem;
}
.team-intro {
    color: #888;
    font-size: 1rem;
}
.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
    justify-items: center;
}
.team-member {
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 2px 8px rgba(44, 62, 80, 0.06);
    padding: 1.2rem 0.7rem 1rem 0.7rem;
    text-align: center;
    transition: box-shadow 0.2s;
    max-width: 220px;
}
.team-member:hover {
    box-shadow: 0 6px 18px rgba(44, 62, 80, 0.13);
}
.team-photo {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 0.7rem;
    border: 3px solid #f2f2f2;
    box-shadow: 0 1px 4px rgba(44, 62, 80, 0.08);
}
.team-member h3 {
    margin: 0.3rem 0 0.1rem 0;
    font-size: 1.05rem;
    color: #2B2B2B;
    font-weight: 700;
}
.title {
    color: #0099ff;
    font-weight: 600;
    margin-bottom: 0.4rem;
    font-size: 0.98rem;
}
.bio {
    color: #888;
    font-size: 0.93rem;
    margin-bottom: 0;
}
.team-cta {
    text-align: center;
    margin-top: 1.5rem;
}
.team-cta h2 {
    color: #2B2B2B;
    margin-bottom: 0.3rem;
    font-size: 1.2rem;
}
.team-cta p {
    color: #666;
    margin-bottom: 1rem;
    font-size: 1rem;
}
.button-primary {
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
.button-primary:hover {
    background: #007acc;
}
@media (max-width: 700px) {
    .team-grid {
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 1rem;
    }
    .team-member {
        max-width: 100%;
        padding: 1rem 0.5rem 0.8rem 0.5rem;
    }
}
</style>

<?php require "includes/footer.php"; ?>
