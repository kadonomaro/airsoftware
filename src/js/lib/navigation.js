export default function navigation() {
    const navToggle = document.querySelector('.js-menu-toggle');
    const navMenu = document.querySelector('.js-menu-navigation');
    navToggle.addEventListener('click', function (evt) {
        evt.preventDefault();
        this.classList.toggle('main-nav__toggle--opened');
        navMenu.classList.toggle('main-nav__list--opened');
    })
}