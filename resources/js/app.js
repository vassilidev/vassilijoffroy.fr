const button = document.getElementById('menu-button');
const menu = document.getElementById('mobile-menu');

button?.addEventListener('click', () => {
    const open = button.getAttribute('aria-expanded') === 'true';
    button.setAttribute('aria-expanded', String(!open));
    menu.hidden = open;
});
