const toggle = document.querySelector('[data-menu-toggle]');
const menu = document.querySelector('[data-menu]');
if (toggle && menu) {
  toggle.addEventListener('click', () => {
    const open = toggle.getAttribute('aria-expanded') === 'true';
    toggle.setAttribute('aria-expanded', String(!open));
    menu.classList.toggle('is-open', !open);
    document.body.classList.toggle('menu-open', !open);
  });
  menu.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => {
    toggle.setAttribute('aria-expanded', 'false');
    menu.classList.remove('is-open');
    document.body.classList.remove('menu-open');
  }));
}

document.querySelectorAll('[data-year]').forEach((node) => { node.textContent = new Date().getFullYear(); });

const form = document.querySelector('[data-whatsapp-form]');
if (form) {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    if (!form.reportValidity()) return;
    const data = new FormData(form);
    const message = [
      'Bună! Doresc o ofertă SkyClean.',
      `Nume: ${data.get('nume')}`,
      `Telefon: ${data.get('telefon')}`,
      `Oraș / Zonă: ${data.get('zona')}`,
      `Serviciu: ${data.get('serviciu')}`,
      `Cantitate: ${data.get('cantitate')}`,
      `Urgență: ${data.get('urgenta')}`,
      `Detalii: ${data.get('detalii') || '-'}`
    ].join('\n');
    window.open(`https://wa.me/40778735007?text=${encodeURIComponent(message)}`, '_blank', 'noopener');
  });
}
