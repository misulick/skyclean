<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/functions.php';

$page = [
    'TITLE' => 'Contact SkyClean | Programări București și Ilfov',
    'DESCRIPTION' => 'Sună sau trimite o cerere pe WhatsApp pentru curățare profesională la domiciliu în București și Ilfov. Răspuns rapid și preț confirmat.',
    'CANONICAL' => 'https://skyclean.ro/contact/',
    'HERO_IMAGE' => '/assets/images/hero-contact.webp',
    'ROOT' => '../',
    'PAGE_EXT' => '.php',
    'PAGE_NAME' => 'Contact'
];

$navigation = $page + [
    'NAV_HOME' => '',
    'NAV_ABOUT' => '',
    'NAV_SERVICES' => '',
    'NAV_CONTACT' => ' aria-current="page"'
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
    <section class="page-hero page-hero--compact"><img src="../assets/images/hero-contact.webp" alt="Specialist SkyClean discutând cu un client despre o programare" width="1536" height="1024" fetchpriority="high"><div class="hero-shade"></div><div class="hero-content"><p class="eyebrow">Contact</p><h1>Cere o ofertă rapidă</h1><p>Sună direct sau completează formularul în 30 de secunde. Îți trimitem cererea pregătită în WhatsApp.</p></div></section>
    <section class="section contact-layout">
      <div class="contact-copy"><p class="eyebrow">Răspuns rapid</p><h2>Hai să stabilim ce trebuie curățat</h2><p>Intervenim rapid la domiciliu sau la sediul clientului în București și Ilfov.</p><a class="contact-line" href="tel:+40778735007"><span>Telefon</span><strong>0778 735 007</strong></a><a class="contact-line" href="https://wa.me/40778735007"><span>WhatsApp</span><strong>Trimite mesaj</strong></a><div class="coverage"><h3>Zone acoperite</h3><p>București & Ilfov, inclusiv Sector 1: Dorobanți, Pipera, Aviației, Primăverii, Băneasa și Bucureștii Noi.</p><p>Ideal pentru locuințe, birouri, firme și spații comerciale.</p></div></div>
      <form class="contact-form" data-whatsapp-form>
        <div class="form-row"><label>Nume<input type="text" name="nume" autocomplete="name" required></label><label>Telefon<input type="tel" name="telefon" autocomplete="tel" required></label></div>
        <label>Oraș / Zonă<input type="text" name="zona" placeholder="București, Ilfov, Otopeni..." required></label>
        <div class="form-row"><label>Serviciu<select name="serviciu" required><option value="">Alege serviciul</option><option>Curățare canapea / colțar</option><option>Curățare saltea</option><option>Curățare covor (la domiciliu)</option><option>Curățare mochetă</option><option>Scaune / fotolii</option><option>Altceva</option></select></label><label>Câte bucăți?<input type="number" name="cantitate" min="1" value="1"></label></div>
        <label>Cât de urgent?<select name="urgenta"><option>Azi</option><option>Mâine</option><option>Săptămâna aceasta</option><option>Nu este urgent</option></select></label>
        <label>Detalii (opțional)<textarea name="detalii" rows="4" placeholder="Spune-ne despre pete, material sau suprafață..."></textarea></label>
        <label class="consent"><input type="checkbox" name="acord" required> Sunt de acord să fiu contactat(ă) pentru ofertă.</label>
        <button class="button button--primary" type="submit">Trimite cererea pe WhatsApp</button>
        <p class="form-tip">Pentru răspuns mai rapid, sună direct la <a href="tel:+40778735007">0778 735 007</a>. Poți trimite și o poză pe WhatsApp după formular.</p>
      </form>
    </section>
  </main>

<?php render_html(__DIR__ . '/../includes/footer.html', $page); ?>
  <a class="floating-call" href="tel:+40778735007" aria-label="Sună acum la SkyClean">Sună acum</a>
  <script src="../assets/js/site.js" defer></script>
</body>
</html>
