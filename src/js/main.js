import '@/css/style.scss';
import Canvas2D from "./lib/Canvas2D";
import Modal from "./lib/Modal";
import navigation from "./lib/navigation";
import { infiniteSlider } from "./lib/sliders";
import tabs from "./lib/tabs";
import order from "./lib/order";


document.addEventListener('DOMContentLoaded', () => {


    heroCanvasAnimation();
    heroTextAnimation();
    infiniteSlider('.js-clients-slider');
    tabs('.js-tabs');

    modalInit();
    navigation();
    order();


    function modalInit() {
        const modal = new Modal({
            openButtonSelector: '.js-open-modal'
        });
        modal.init();
    }

    function heroTextAnimation() {
        const heroTitle = document.querySelector('.hero__title');
        const heroSubtitle = document.querySelector('.hero__subtitle');

        heroTitle.classList.add('hero__title--fade-in');
        heroSubtitle.classList.add('hero__subtitle--fade-in');
    }

    function heroCanvasAnimation() {
        const canvas = new Canvas2D({
            canvas: document.querySelector('.js-hero-canvas'),
            width: window.innerWidth,
            height: window.innerHeight
        });

        canvas.drawText({
            font: 'bold 16px Roboto',
            ASCIICharRange: [65, 122],
            cell: {
                width: 20,
                height: 20
            },
            colors: ['#cdcdcd','#b4b4b4', '#9b9b9b', '#828282'],
            delay: window.innerWidth <= 767 ? 50 : 10
        });
    }

});