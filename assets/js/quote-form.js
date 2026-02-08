(function() {
  const form = document.getElementById('quoteForm');
  if (!form) return; // Ensure the form exists

  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    const f = new FormData(form);
    const message = `Vreau ofertă SkyClean:
Nume: ${f.get("name")}
Telefon: ${f.get("phone")}
Zona: ${f.get("area")}
Serviciu: ${f.get("service")}
Bucăți: ${f.get("qty")}
Detalii: ${f.get("details")}`;

    const waNumber = '40778735007';
    const url = 'https://wa.me/' + waNumber + '?text=' + encodeURIComponent(message);

    window.open(url, '_blank');
    form.reset();
  });
})();