<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/functions.php';

$page = [
    'TITLE' => 'Curățare canapele, saltele, covoare și mochete București | SkyClean',
    'DESCRIPTION' => 'SkyClean oferă curățare profesională pentru canapele, saltele, covoare și mochete la domiciliu în București și Ilfov. Prețuri clare și programări rapide.',
    'CANONICAL' => 'https://skyclean.ro/',
    'HERO_IMAGE' => '/assets/images/hero-acasa.webp',
    'ROOT' => './',
    'PAGE_EXT' => '.php',
    'PAGE_NAME' => 'Acasă'
];

$navigation = $page + [
    'NAV_HOME' => ' aria-current="page"',
    'NAV_ABOUT' => '',
    'NAV_SERVICES' => '',
    'NAV_CONTACT' => ''
];
?>
<!doctype html>
<html lang="ro">
<head>
<?php render_html(__DIR__ . '/includes/head.html', $page); ?>
</head>
<body>
  <a class="skip-link" href="#continut">Sari la conținut</a>
<?php render_html(__DIR__ . '/includes/header.html', $navigation); ?>
  <main id="continut">
    <section class="hero hero--home">
      <img src="./assets/images/hero-acasa.webp" alt="Curățare profesională a unei canapele într-un living luminos" width="1536" height="1024" fetchpriority="high">
      <div class="hero-shade"></div>
      <div class="hero-content">
        <p class="eyebrow">București & Ilfov • direct la domiciliu</p>
        <h1>Curățare canapele, saltele, covoare și mochete</h1>
        <p>Spălare profesională la domiciliu. Eliminăm petele și mirosurile rapid, cu echipamente performante și soluții sigure.</p>
        <div class="hero-actions"><a class="button button--primary" href="tel:+40778735007">Sună: 0778 735 007</a><a class="button button--ghost" href="https://wa.me/40778735007">Scrie pe WhatsApp</a></div>
      </div>
    </section>

    <section class="trust-strip" aria-label="Avantaje SkyClean">
      <span>Venim direct la domiciliu</span><span>Eliminăm pete și mirosuri</span><span>Programări rapide</span><span>Echipamente profesionale</span>
    </section>

    <section class="section services-preview">
      <div class="section-heading"><p class="eyebrow">Serviciile noastre</p><h2>Curățenie în profunzime, pentru fiecare suprafață</h2><p>Alege serviciul de care ai nevoie și cere oferta din pagina dedicată.</p></div>
      <div class="service-grid">
        <article class="service-card"><img src="./assets/images/serviciu-canapele.webp" alt="Curățare profesională canapea" width="1024" height="1024" loading="lazy"><div><span>01</span><h3>Curățare canapele</h3><p>Canapele, colțare, fotolii și scaune textile sau din piele.</p><a href="./servicii/index.php#canapele">Vezi serviciul</a></div></article>
        <article class="service-card"><img src="./assets/images/serviciu-saltele.webp" alt="Curățare profesională saltea" width="1024" height="1024" loading="lazy"><div><span>02</span><h3>Curățare saltele</h3><p>Igienizare în profunzime, eliminare pete, acarieni și mirosuri.</p><a href="./servicii/index.php#saltele">Vezi serviciul</a></div></article>
        <article class="service-card"><img src="./assets/images/serviciu-covoare.webp" alt="Curățare covoare la domiciliu" width="1024" height="1024" loading="lazy"><div><span>03</span><h3>Curățare covoare</h3><p>Curățare la domiciliu, cu protejarea culorilor și a fibrelor.</p><a href="./servicii/index.php#covoare">Vezi serviciul</a></div></article>
        <article class="service-card"><img src="./assets/images/serviciu-mochete.webp" alt="Curățare mochetă de birou" width="1024" height="1024" loading="lazy"><div><span>04</span><h3>Curățare mochete</h3><p>Soluții eficiente pentru birouri, hoteluri și spații comerciale.</p><a href="./servicii/index.php#mochete">Vezi serviciul</a></div></article>
      </div>
    </section>

    <section class="section price-section">
      <div class="section-heading"><p class="eyebrow">Fără surprize</p><h2>Prețuri clare și fixe</h2><p>Prețurile sunt fixe pentru utilizare normală și nu cresc în funcție de gradul de murdărie.</p></div>
      <div class="price-grid"><div><strong>200 lei</strong><span>Canapea 2 locuri</span></div><div><strong>250 lei</strong><span>Canapea 3 locuri</span></div><div><strong>100 lei</strong><span>Saltea single</span></div><div><strong>15 lei/mp</strong><span>Mochetă / covor</span></div></div>
      <p class="center-note"><a href="tel:+40778735007">Sună acum și îți confirmăm prețul exact în 30 de secunde.</a></p>
    </section>

    <section class="section corporate-panel">
      <div><p class="eyebrow">Pentru companii</p><h2>Curățenie fără întreruperea activității</h2><p>Pentru birouri și spații comerciale, intervenim în weekend sau în afara orelor de program, astfel încât activitatea să nu fie afectată.</p></div>
      <ul class="check-list"><li>Intervenții în weekend pentru companii</li><li>Fără întreruperea activității</li><li>Oferte personalizate corporate</li></ul>
      <a class="button button--light" href="tel:+40778735007">Sună pentru ofertă corporate</a>
    </section>

    <section class="section testimonials">
      <div class="section-heading"><p class="eyebrow">Clienții noștri spun</p><h2>Rezultate care se văd și se simt</h2></div>
      <div class="quote-grid"><blockquote>„Canapeaua arată ca nouă. Au venit rapid și au scos toate petele.”<cite>Client București</cite></blockquote><blockquote>„Foarte serioși, au lucrat curat și eficient. Recomand.”<cite>Client Ilfov</cite></blockquote><blockquote>„Rezultatul a fost peste așteptări. O să mai apelez la ei.”<cite>Client București</cite></blockquote><blockquote>„Servicii de nota 10. Mi-au curățat mocheta de la birou și arată impecabil.”<cite>Client București</cite></blockquote></div>
      <p class="center-note">Intervenții zilnice în București & Ilfov</p>
    </section>
  </main>

<?php render_html(__DIR__ . '/includes/footer.html', $page); ?>
  <a class="floating-call" href="tel:+40778735007" aria-label="Sună acum la SkyClean">Sună acum</a>
  <script src="./assets/js/site.js" defer></script>
</body>
</html>
