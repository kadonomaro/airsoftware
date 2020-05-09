export default function magicScroll() {
    const parent = document.querySelector('.js-magic-scroll');
    const children = parent.querySelectorAll('.js-magic-scroll-item');
    const scrollSection = window.innerHeight / children.length;
    const mouse = document.querySelector('.js-magic-scroll-mouse');
    let index = 1;

    window.addEventListener('scroll', startScroll);

    function startScroll() {
        mouse.style.opacity = '0';
        setTimeout(()=>{
            mouse.style.display = 'none';
        }, 300);


        if (window.pageYOffset > scrollSection * index) {
            if (children[index]) {
                children[index].style.opacity = '1';
                children[index].style.transform = 'translateY(0) scale(1)';
            }
            index++;

            if (index >= children.length && window.pageYOffset >= window.innerHeight * 2) {
                window.removeEventListener('scroll', startScroll);
                parent.style.position = 'absolute';
                document.querySelector('.company-hero').style.minHeight = '100vh';
            }
        }
    }
}