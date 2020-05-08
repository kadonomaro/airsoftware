export default function magicScroll() {
    const parent = document.querySelector('.js-magic-scroll');
    const childrens = parent.querySelectorAll('.js-magic-scroll-item');
    const scrollSection = window.innerHeight / childrens.length;
    let index = 0;

    window.addEventListener('scroll', startScroll);

    function startScroll(evt) {
        console.log('scrolling');
        if (window.scrollY > scrollSection * (index + 1)) {
            if (childrens[index]) {
                childrens[index].style.opacity = '1';
            }
            index++;


            if (index >= childrens.length) {
                window.removeEventListener('scroll', startScroll);
            }
        }
    }
}