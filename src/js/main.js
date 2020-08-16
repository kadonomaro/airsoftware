import '@/css/style.scss';
import Canvas2D from "./lib/Canvas2D";
import navigation from "./lib/navigation";
import { infiniteSlider } from "./lib/sliders";
import tabs from "./lib/tabs";
import order from "./lib/order";
import Modal from "@/js/lib/Modal";


document.addEventListener('DOMContentLoaded', () => {
    heroCanvasAnimation();
    heroTextAnimation();
    infiniteSlider('.js-clients-slider');
    tabs('.js-tabs');

    const modal = new Modal();
    navigation();
    order();

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
            colors: ['#9b9b9b','#828282', '#696969', '#505050'],
            delay: window.innerWidth <= 767 ? 50 : 10
        });
    }
});