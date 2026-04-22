const translations = {
  ro: {
    "back-home": "← Înapoi la homepage",
    "hero-area": "București & Ilfov",
    "hero-title-canapele": "Curățare profesională canapele",
    "hero-title-saltele": "Curățare profesională saltele",
    "hero-title-covoare": "Curățare profesională covoare",
    "hero-title-mochete": "Curățare profesională mochete",

    "hero-lead-canapele": "Curățăm canapele, colțare, fotolii și scaune la domiciliu, în București și Ilfov, cu echipamente profesionale și soluții sigure pentru materiale textile și piele.",
    "hero-lead-saltele": "Curățăm saltele la domiciliu, în București și Ilfov, folosind echipamente profesionale pentru eliminarea petelor, mirosurilor și acarienilor.",
    "hero-lead-covoare": "Curățăm covoare la domiciliu, în București și Ilfov, cu soluții profesionale care protejează fibrele și culorile.",
    "hero-lead-mochete": "Curățăm mochete profesionale pentru birouri și spații comerciale, cu echipamente performante și intervenții rapide.",

    "cta-call": "📞 Sună acum: 0778 735 007",
    "cta-whatsapp": "WhatsApp",

    "benefits-title": "De ce aleg clienții SkyClean",
    "benefit1": "✔ Venim direct la domiciliu",
    "benefit2": "✔ Eliminăm pete și mirosuri",
    "benefit3": "✔ Curățare în profunzime",
    "benefit4": "✔ Programări rapide în București & Ilfov",

    "section-what-clean": "Ce curățăm",
    "section-prices": "Prețuri clare și fixe",
    "section-worth": "De ce merită",

    "worth1-canapele": "Curățarea profesională ajută la eliminarea petelor, mirosurilor, bacteriilor, acarienilor și alergenilor din țesături.",
    "worth2-canapele": "Folosim sistem de curățare cu injecție–extracție pentru rezultate vizibile și timp de uscare redus.",
    "worth3-canapele": "Intervenim rapid în București și Ilfov, direct la domiciliu sau la sediul clientului.",

    "worth1-saltele": "Curățarea profesională a saltelei contribuie la un mediu mai curat și la un somn mai sănătos.",
    "worth2-saltele": "Îndepărtăm pete, mirosuri, acarieni și alergeni din profunzimea saltelei.",
    "worth3-saltele": "Intervenim rapid în București și Ilfov, direct la domiciliu.",

    "worth1-covoare": "Curățarea profesională redă covoarelor un aspect curat și împrospătat.",
    "worth2-covoare": "Îndepărtăm murdăria acumulată, petele și alergenii fără a afecta fibrele.",
    "worth3-covoare": "Intervenim rapid în București și Ilfov, direct la domiciliu sau la sediul clientului.",

    "worth1-mochete": "Curățarea profesională a mochetelor este ideală pentru spații corporate și zone cu trafic intens.",
    "worth2-mochete": "Îndepărtăm murdăria, petele și alergenii fără a afecta structura materialului.",
    "worth3-mochete": "Intervenim rapid în București și Ilfov, pentru birouri și spații comerciale.",

    "form-title": "Cere ofertă rapidă sau sună acum",
    "form-sub": "Completează formularul în 30 secunde sau sună direct pentru programare rapidă",

    "footer": "© SkyClean – Curățenie la nivel înalt"
  },

  en: {
    "back-home": "← Back to homepage",
    "hero-area": "Bucharest & Ilfov",
    "hero-title-canapele": "Professional sofa cleaning",
    "hero-title-saltele": "Professional mattress cleaning",
    "hero-title-covoare": "Professional rug cleaning",
    "hero-title-mochete": "Professional carpet cleaning",

    "hero-lead-canapele": "We clean sofas, corner sofas, armchairs and chairs at home, in Bucharest and Ilfov, using professional equipment and safe solutions for textile and leather materials.",
    "hero-lead-saltele": "We clean mattresses at home, in Bucharest and Ilfov, using professional equipment to remove stains, odors and dust mites.",
    "hero-lead-covoare": "We clean rugs at home, in Bucharest and Ilfov, with professional solutions that protect fibers and colors.",
    "hero-lead-mochete": "We clean professional carpets for offices and commercial spaces, with high-performance equipment and fast interventions.",

    "cta-call": "📞 Call now: 0778 735 007",
    "cta-whatsapp": "WhatsApp",

    "benefits-title": "Why clients choose SkyClean",
    "benefit1": "✔ We come directly to your location",
    "benefit2": "✔ We remove stains and odors",
    "benefit3": "✔ Deep cleaning",
    "benefit4": "✔ Fast bookings in Bucharest & Ilfov",

    "section-what-clean": "What we clean",
    "section-prices": "Clear and fixed prices",
    "section-worth": "Why it is worth it",

    "worth1-canapele": "Professional cleaning helps remove stains, odors, bacteria, dust mites and allergens from fabrics.",
    "worth2-canapele": "We use injection-extraction cleaning for visible results and reduced drying time.",
    "worth3-canapele": "We respond quickly in Bucharest and Ilfov, directly at your home or business.",

    "worth1-saltele": "Professional mattress cleaning contributes to a cleaner environment and healthier sleep.",
    "worth2-saltele": "We remove stains, odors, dust mites and allergens from deep inside the mattress.",
    "worth3-saltele": "We respond quickly in Bucharest and Ilfov, directly at your home.",

    "worth1-covoare": "Professional cleaning restores a clean and refreshed look to your rugs.",
    "worth2-covoare": "We remove built-up dirt, stains and allergens without damaging the fibers.",
    "worth3-covoare": "We respond quickly in Bucharest and Ilfov, directly at your home or business.",

    "worth1-mochete": "Professional carpet cleaning is ideal for corporate spaces and high-traffic areas.",
    "worth2-mochete": "We remove dirt, stains and allergens without affecting the structure of the material.",
    "worth3-mochete": "We respond quickly in Bucharest and Ilfov, for offices and commercial spaces.",

    "form-title": "Request a quote or call now",
    "form-sub": "Fill out the form in 30 seconds or call directly for a fast booking",

    "footer": "© SkyClean – Professional cleaning services"
  }
};

function changeLanguage(lang) {
  localStorage.setItem("skyclean-lang", lang);
  document.documentElement.lang = lang;

  document.querySelectorAll("[data-translate]").forEach(el => {
    const key = el.getAttribute("data-translate");
    if (translations[lang] && translations[lang][key]) {
      el.textContent = translations[lang][key];
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const savedLang = localStorage.getItem("skyclean-lang") || "ro";
  changeLanguage(savedLang);
});
