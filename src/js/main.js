import '@/css/style.scss';
import Canvas2D from "./lib/Canvas2D";
import Modal from "./lib/Modal";
import navigation from "./lib/navigation";
import { infiniteSlider } from "./lib/sliders";
import tabs from "./lib/tabs";
import order from "./lib/order";
import FormSender from "./lib/FormSender";
import lazyMap from "@/js/lib/lazyMap";
import magicScroll from "@/js/lib/magicScroll";
import FormValidation from "@/js/lib/FormValidation";

document.addEventListener('DOMContentLoaded', () => {

    if (document.body.classList.contains('main-page')) {
        heroCanvasAnimation();
        heroTextAnimation();
        infiniteSlider('.js-clients-slider');
        tabs('.js-tabs');
    }


    if (document.body.classList.contains('company-page')) {
        lazyMap('.js-company-map');
        magicScroll();
        visitEmailSend();
    }


    modalInit();
    navigation();
    order();


    function modalInit() {
        const modal = new Modal({
            openButtonSelector: '.js-open-modal'
        });
        modal.init();
    }


    function visitEmailSend() {
        const visitForms = document.querySelectorAll('[name=visit]');
        const formValidation = new FormValidation({
            forms: visitForms
        });

        formValidation.validate(function (form) {
            console.log(form);
            const sender = new FormSender({
                url: '/php/visit-mail.php',
                form: form
            });

            sender.send().then(() => form.reset());
        });
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
