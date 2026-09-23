<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/functions.php';

$page = [
    'TITLE' => 'Despre SkyClean | Curățenie profesională București și Ilfov',
    'DESCRIPTION' => 'Descoperă tehnologia, echipamentele și procedurile profesionale folosite de SkyClean pentru curățarea textilelor în București și Ilfov.',
    'CANONICAL' => 'https://skyclean.ro/despre-noi/',
    'HERO_IMAGE' => '/assets/images/hero-despre.webp',
    'ROOT' => '../',
    'PAGE_EXT' => '.php',
    'PAGE_NAME' => 'Despre noi'
];

$navigation = $page + [
    'NAV_HOME' => '',
    'NAV_ABOUT' => ' aria-current="page"',
    'NAV_SERVICES' => '',
    'NAV_CONTACT' => ''
];
?>
<!doctype html>
<html lang="ro">
<head>
<?php render_html(__DIR__ . '/../includes/head.html', $page); ?>
</head>
<body>
  <a class="skip-link" href="#continut">Sari la conținut</a>
<?php render_html(__DIR__ . '/../includes/header.html', $navigation); ?>
  <main id="continut">
    <section class="page-hero"><img src="../assets/images/hero-despre.webp" alt="Echipament profesional pentru curățare prin injecție-extracție" width="1536" height="1024" fetchpriority="high"><div class="hero-shade"></div><div class="hero-content"><p class="eyebrow">Despre noi</p><h1>Tehnologie profesională. Grijă pentru fiecare fibră.</h1><p>Experiența, puterea de extracție și atenția la detalii lucrează împreună pentru un rezultat curat, sigur și durabil.</p></div></section>
    <section class="section story-layout">
      <div class="section-heading section-heading--left"><p class="eyebrow">SkyClean</p><h2>Tehnologie profesională de top</h2></div>
      <div class="prose"><p>La SkyClean, standardele ridicate de curățenie sunt susținute de tehnologie profesională de top și proceduri avansate de lucru. Investim constant în echipamente performante pentru a oferi rezultate superioare în curățarea covoarelor, mochetelor, saltelelor și tapițeriilor.</p></div>
    </section>
    <section class="section detail-grid">
      <article><span>01</span><h2>Echipament de înaltă performanță: Advance 600</h2><p>Utilizăm Advance 600 – sistem profesional de curățare cu injecție–extracție, echipat cu tehnologie Twin sau Triple Vac, recunoscută pentru puterea mare de extracție și capacitatea de a elimina murdăria adânc impregnată în fibre. Presiunea controlată a soluției, combinată cu vacuumul de înaltă performanță, asigură o curățare în profunzime, o recuperare eficientă a reziduurilor și timp de uscare semnificativ redus.</p></article>
      <article><span>02</span><h2>Aplicații diverse și soluții sigure</h2><p>Acest tip de echipament ne permite să intervenim eficient atât în locuințe private, cât și în spații comerciale și birouri, inclusiv în zone cu trafic intens, unde igienizarea corectă este esențială. Procedurile noastre sunt completate de soluții profesionale atent selecționate, sigure pentru utilizatori și compatibile cu cele mai sensibile tipuri de materiale.</p></article>
      <article><span>03</span><h2>Misiunea noastră: durabilitate și confort</h2><p>La SkyClean, tehnologia, experiența și atenția la detalii se îmbină pentru a livra servicii de curățenie la standarde profesionale, orientate spre durabilitate, igienă și confort.</p></article>
    </section>
    <section class="section callout"><p>Curățare profesională la domiciliu în București și Ilfov</p><h2>Un spațiu mai curat începe cu o programare simplă.</h2><div><a class="button button--primary" href="tel:+40778735007">Sună acum</a><a class="text-link" href="../contact/index.php">Cere o ofertă</a></div></section>
  </main>

<?php render_html(__DIR__ . '/../includes/footer.html', $page); ?>
  <a class="floating-call" href="tel:+40778735007" aria-label="Sună acum la SkyClean">Sună acum</a>
  <script src="../assets/js/site.js" defer></script>
</body>
</html>
