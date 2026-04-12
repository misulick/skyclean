const translations = {
  ro: {
    "back-home": "← Înapoi la homepage",
    "hero-area": "București & Ilfov",
    "cta-call": "📞 Sună acum",
    "cta-whatsapp": "WhatsApp",

    "benefits-title": "De ce aleg clienții SkyClean",
    "benefit1": "✔ Venim direct la domiciliu",
    "benefit2": "✔ Eliminăm pete și mirosuri",
    "benefit3": "✔ Curățare în profunzime",
    "benefit4": "✔ Programări rapide în București & Ilfov",

    "form-title": "Cere ofertă rapidă sau sună acum",
    "form-sub": "Completează formularul în 30 secunde sau sună direct pentru programare rapidă",

    "footer": "© SkyClean – Curățenie la nivel înalt"
  },

  en: {
    "back-home": "← Back to homepage",
    "hero-area": "Bucharest & Ilfov",
    "cta-call": "📞 Call now",
    "cta-whatsapp": "WhatsApp",

    "benefits-title": "Why clients choose SkyClean",
    "benefit1": "✔ We come directly to your location",
    "benefit2": "✔ We remove stains and odors",
    "benefit3": "✔ Deep cleaning",
    "benefit4": "✔ Fast bookings in Bucharest & Ilfov",

    "form-title": "Request a quote or call now",
    "form-sub": "Fill out the form in 30 seconds or call directly for fast booking",

    "footer": "© SkyClean – Professional cleaning services"
  }
};

function changeLanguage(lang) {
  document.documentElement.lang = lang;

  document.querySelectorAll("[data-translate]").forEach(el => {
    const key = el.getAttribute("data-translate");
    if (translations[lang][key]) {
      el.innerText = translations[lang][key];
    }
  });
}
