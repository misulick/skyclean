<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/functions.php';

$page = [
    'TITLE' => 'Servicii curățare canapele, saltele, covoare și mochete | SkyClean',
    'DESCRIPTION' => 'Servicii profesionale de curățare canapele, saltele, covoare și mochete în București și Ilfov, cu prețuri clare și echipamente performante.',
    'CANONICAL' => 'https://skyclean.ro/servicii/',
    'HERO_IMAGE' => '/assets/images/hero-servicii.webp',
    'ROOT' => '../',
    'PAGE_EXT' => '.php',
    'PAGE_NAME' => 'Servicii'
];

$navigation = $page + [
    'NAV_HOME' => '',
    'NAV_ABOUT' => '',
    'NAV_SERVICES' => ' aria-current="page"',
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
    <section class="page-hero"><img src="../assets/images/hero-servicii.webp" alt="Specialist SkyClean pregătind echipamentul pentru curățare profesională" width="1536" height="1024" fetchpriority="high"><div class="hero-shade"></div><div class="hero-content"><p class="eyebrow">Serviciile noastre</p><h1>Curățare în profunzime, direct la tine</h1><p>Intervenții rapide în București și Ilfov pentru mobilier tapițat, saltele, covoare și mochete.</p></div></section>
    <nav class="service-jump" aria-label="Servicii"><a href="#canapele">Canapele</a><a href="#saltele">Saltele</a><a href="#covoare">Covoare</a><a href="#mochete">Mochete</a><a href="#preturi">Prețuri</a></nav>

    <section class="service-detail" id="canapele"><img src="../assets/images/serviciu-canapele.webp" alt="Curățare profesională a unei canapele textile" width="1024" height="1024" loading="lazy"><div><p class="eyebrow">Serviciul 01</p><h2>Curățare profesională canapele</h2><p>Oferim servicii de curățare profesională pentru canapele, scaune și fotolii în București și zonele limitrofe, folosind echipamente cu sistem injecție–extracție. Metoda asigură o curățare în profunzime, eliminând murdăria, petele, bacteriile, acarienii și alergenii din țesături.</p><h3>Ce curățăm</h3><ul class="check-list"><li>Canapele de 2, 3 și 4 locuri, inclusiv șezut, spătar, brațe și partea din spate</li><li>Colțare și canapele extensibile</li><li>Fotolii și scaune tapițate</li><li>Mobilier tapițat din stofă</li><li>Canapele, fotolii și scaune din piele</li></ul><h3>Soluții profesionale și sigure</h3><p>Folosim soluții profesionale, sigure pentru copii și animale de companie, care elimină mirosurile neplăcute și redau prospețimea materialelor. Pentru piele utilizăm produse speciale care curăță delicat, hidratează și protejează fără a deteriora suprafața.</p><p>Curățarea profesională ajută la eliminarea petelor, mirosurilor, bacteriilor, acarienilor și alergenilor, cu rezultate vizibile și timp de uscare redus.</p></div></section>

    <section class="service-detail service-detail--reverse" id="saltele"><img src="../assets/images/serviciu-saltele.webp" alt="Curățare și igienizare profesională a unei saltele" width="1024" height="1024" loading="lazy"><div><p class="eyebrow">Serviciul 02</p><h2>Curățare profesională saltele</h2><p>Oferim curățare profesională a saltelelor la domiciliu în București și Ilfov, cu echipamente de injecție–extracție pentru curățare profundă și igienizare completă. Eliminăm murdăria, petele, acarienii, bacteriile și alergenii acumulați în profunzime.</p><h3>Ce curățăm</h3><ul class="check-list"><li>Saltele single (80–90 cm)</li><li>Saltele duble (140–160 cm)</li><li>Saltele King Size (180–200 cm)</li><li>Saltele de copii, topper-e și perne</li><li>Curățare pe ambele fețe, acolo unde este posibil</li></ul><h3>Igienizare completă și aspect proaspăt</h3><p>Intervenim asupra petelor de transpirație, lichide, urme organice și mirosuri neplăcute. Soluțiile sunt sigure pentru copii și animale de companie și potrivite pentru persoanele sensibile sau alergice. O saltea curată înseamnă un somn mai sănătos și o durată de viață mai lungă.</p></div></section>

    <section class="service-detail" id="covoare"><img src="../assets/images/serviciu-covoare.webp" alt="Curățare covor la domiciliu prin injecție-extracție" width="1024" height="1024" loading="lazy"><div><p class="eyebrow">Serviciul 03</p><h2>Curățare profesională covoare la domiciliu</h2><p>SkyClean oferă servicii de curățare a covoarelor adaptate atât locuințelor private, cât și birourilor, sediilor de firmă și spațiilor comerciale. Serviciile pentru covoare sunt realizate exclusiv la domiciliu.</p><h3>Ce curățăm</h3><ul class="check-list"><li>Covoare cu fir scurt</li><li>Covoare cu fir lung (shaggy)</li><li>Traverse și mochete rezidențiale</li><li>Covoare sintetice, din lână sau bumbac</li></ul><h3>Eficiență în profunzime și protecția fibrelor</h3><p>Procedurile noastre îndepărtează petele persistente, murdăria acumulată, bacteriile și alergenii fără a afecta culorile, textura sau structura fibrelor. Redăm covoarelor un aspect curat și împrospătat, cu uscare eficientă.</p></div></section>

    <section class="service-detail service-detail--reverse" id="mochete"><img src="../assets/images/serviciu-mochete.webp" alt="Curățare profesională a unei mochete de birou" width="1024" height="1024" loading="lazy"><div><p class="eyebrow">Serviciul 04</p><h2>Curățare profesională mochete</h2><p>Oferim servicii specializate pentru mochete de orice tip, în special în spații corporate, hoteluri, clădiri de birouri și unități comerciale unde igiena, aspectul și continuitatea activității sunt esențiale.</p><h3>Ce curățăm</h3><ul class="check-list"><li>Mochete de birou cu trafic intens</li><li>Mochete din spații comerciale</li><li>Mochete din hoteluri și pensiuni</li><li>Mochete rezidențiale</li><li>Pete de cafea, cerneală și alte urme persistente</li></ul><h3>Soluții pentru spații corporate și hoteliere</h3><p>Intervențiile pot fi programate în weekend sau în afara orelor de program, fără cost extra, astfel încât activitatea să continue fără întreruperi majore. Puterea mare de extracție asigură o uscare rapidă, iar pentru suprafețe mari oferim soluții și planuri de mentenanță adaptate.</p></div></section>

    <section class="section price-list" id="preturi"><div class="section-heading"><p class="eyebrow">Lista completă</p><h2>Prețuri clare și fixe</h2><p>Servicii profesionale de curățenie în București și împrejurimi.</p></div><div class="price-columns"><article><h3>Canapele, fotolii & scaune</h3><dl><div><dt>Canapea 2 locuri</dt><dd>200 RON</dd></div><div><dt>Canapea 3 locuri</dt><dd>250 RON</dd></div><div><dt>Canapea 4 locuri</dt><dd>300 RON</dd></div><div><dt>Fotoliu</dt><dd>80 RON</dd></div><div><dt>Scaun tapițat</dt><dd>40 RON</dd></div><div><dt>Canapea piele 2 locuri</dt><dd>250 RON</dd></div><div><dt>Canapea piele 3 locuri</dt><dd>300 RON</dd></div><div><dt>Fotoliu piele</dt><dd>120 RON</dd></div></dl><p>Curățare completă, inclusiv spatele mobilierului. Îndepărtare pete persistente, fără afectarea culorilor.</p></article><article><h3>Saltele</h3><dl><div><dt>Saltea single</dt><dd>100 RON</dd></div><div><dt>Saltea dublă</dt><dd>150 RON</dd></div><div><dt>Saltea King Size</dt><dd>200 RON</dd></div><div><dt>Topper</dt><dd>80 RON</dd></div><div><dt>Pernă</dt><dd>30 RON</dd></div></dl><p>Curățare în profunzime, eliminare acarieni și mirosuri neplăcute. Curățare pe ambele fețe, unde este posibil.</p></article><article><h3>Covoare & mochete</h3><dl><div><dt>Covoare la domiciliu</dt><dd>15 RON/mp</dd></div><div><dt>Mochete</dt><dd>15 RON/mp</dd></div></dl><p>Ideal pentru birouri, hoteluri și spații comerciale. Preț negociabil pentru suprafețe mari.</p></article></div><aside class="price-notes"><h3>Mențiuni importante</h3><ul class="check-list"><li>Deplasare în București/Ilfov pentru comenzi mai mici de 200 RON: 50 RON</li><li>Deplasare gratuită pentru comenzi mai mari de 200 RON</li><li>Reducere de 10% pentru comenzile care depășesc 500 RON</li><li>Prețurile nu variază în funcție de gradul de murdărie</li></ul></aside></section>
  </main>

<?php render_html(__DIR__ . '/../includes/footer.html', $page); ?>
  <a class="floating-call" href="tel:+40778735007" aria-label="Sună acum la SkyClean">Sună acum</a>
  <script src="../assets/js/site.js" defer></script>
</body>
</html>
