import '@/css/style.scss';
import Canvas2D from "./lib/Canvas2D";
import Modal from "./lib/Modal";
import navigation from "./lib/navigation";
import { infiniteSlider, internshipTeamSlider } from "./lib/sliders";
import tabs from "./lib/tabs";
import imageHighlight from "./lib/imageHighlight";
import order from "./lib/order";
import FormSender from "./lib/FormSender";
import lazyMap from "@/js/lib/lazyMap";

document.addEventListener('DOMContentLoaded', () => {

    if (document.body.classList.contains('main-page')) {
        heroCanvasAnimation();
        heroTextAnimation();
        infiniteSlider('.js-clients-slider');
        tabs('.js-tabs');
    }

    if (document.body.classList.contains('product-page')) {
        scrollObservers();
        if (window.innerWidth >= 767) {
            imageHighlight({
                image: {
                    selector: '.js-product-hero-image',
                    highlightClass: 'product-hero-grid__image--highlighted'
                },
                delay: 2500
            });
        }
    }

    if (document.body.classList.contains('internship-page')) {
        scrollObserver();
        internshipTeamSlider('.js-internship-team-slider');
        emailSend();
    }

    if (document.body.classList.contains('company-page')) {
        lazyMap('.js-company-map');
    }

    if (document.body.classList.contains('404-page')) {
        page404CanvasAnimation();
    }

    modalInit();
    navigation();

    // order();


    function modalInit() {
        const modal = new Modal({
            openButtonSelector: '.js-open-modal'
        });
        modal.init();
    }


    function emailSend() {
        const joinForm = document.querySelector('.js-join-form');
        const sender = new FormSender({
            url: '/php/mail.php',
            form: joinForm
        });

        sender.send()
            .then(() => {
                joinForm.reset();
                const modal = new Modal({
                    openButtonSelector: '.js-open-modal'
                });
                modal.open('thanks-modal');
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


    function page404CanvasAnimation() {
        const canvas = new Canvas2D({
           canvas: document.querySelector('.js-404-canvas'),
           width: window.innerWidth,
           height: window.innerHeight
        });

        canvas.drawFromImage({
           image: window.innerWidth > 767 ? '/dist/assets/image/404/404.jpg' : '/dist/assets/image/404/404__mobile.jpg',
           font: window.innerWidth > 767 ? 'bold 14px Roboto' : 'bold 8px Roboto',
           ASCIICharRange: window.innerWidth > 767 ? [65, 122] : [7, 7],
           cell: {
               width: window.innerWidth > 767 ? 15 : 5,
               height: window.innerWidth > 767 ? 15 : 5
           },
           colors: ['#cdcdcd','#b4b4b4', '#9b9b9b', '#828282'],
           delay: 10
        });
    }


    function scrollObservers() {
        const triggers = document.querySelectorAll('.js-product-overview-trigger');
        const overviewScreen = document.querySelector('.js-overview-screen');
        const images = overviewScreen.querySelectorAll('.js-product-overview-target');

        startTextObserver();

        if (window.innerWidth >= 1023) {
            startImageObserver();
        }

        function startTextObserver() {
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.50
            };

            function callback(entries) {
                entries.forEach((entry) => {
                    const imageTarget = overviewScreen.querySelector(`[data-image="${entry.target.dataset.target}"]`);
                    if (entry.intersectionRatio > options.threshold) {
                        images.forEach((image) => {
                            image.classList.add('product-overview__image--hidden');
                        });
                        imageTarget.classList.remove('product-overview__image--hidden');
                    }
                });
            }

            const observer = new IntersectionObserver(callback, options);

            triggers.forEach((trigger) => {
                observer.observe(trigger);
            });
        }

        
        function startImageObserver() {
            const scrollTopLimit = window.innerHeight / 3;
            let isSticky = false;

            window.addEventListener('scroll', () => {

                if ( !isSticky && (overviewScreen.getBoundingClientRect().top <= scrollTopLimit) ) {
                    isSticky = true;
                    setImagesPosition(images, {
                        position: 'fixed',
                        top: scrollTopLimit + 'px',
                        bottom: 'auto'
                    });
                } else if ( isSticky && (overviewScreen.getBoundingClientRect().top > scrollTopLimit) ) {
                    isSticky = false;
                    setImagesPosition(images, {
                        position: 'absolute',
                        top: '0',
                        bottom: 'auto'
                    });
                }

                if ( isSticky && (images[0].getBoundingClientRect().bottom > overviewScreen.getBoundingClientRect().bottom) ) {
                    isSticky = false;
                    setImagesPosition(images, {
                        position: 'absolute',
                        top: 'auto',
                        bottom: '0'
                    });
                }
            });


            function setImagesPosition(images, { position, top, bottom }) {
                images.forEach((image) => {
                    image.style.position = position;
                    image.style.top = top;
                    image.style.bottom = bottom;
                });
            }
        }

    }


    function scrollObserver() {
        const items = document.querySelectorAll('.js-internship-item');

        const options = {
            root: null,
            rootMargin: `0px 0px ${window.innerWidth > 767 ? "50%" : "100%"} 0px`,
            threshold: 0.50
        };

        function callback(entries) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('internship-about__item--visible');
                }
            });
        }

        const observer = new IntersectionObserver(callback, options);

        items.forEach((item) => {
            observer.observe(item);
        });
    }

});