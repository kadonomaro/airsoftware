import '@/css/style.scss';
import Canvas2D from "./lib/Canvas2D";


document.addEventListener('DOMContentLoaded', () => {

    if (document.body.classList.contains('main-page')) {
        heroCanvasAnimation();
        heroTextAnimation();
        infiniteSliderInit('.js-clients-slider');
        tabsInit('.js-tabs');
    }
    if (document.body.classList.contains('product-page')) {
        scrollObservers();
        if (window.innerWidth >= 767) {
            gridImageHighlight(2500);
        }
    }
    if (document.body.classList.contains('internship-page')) {
        scrollObserver();
        sliderInit('.js-internship-team-slider');
    }

    if (document.body.classList.contains('404-page')) {
        page404CanvasAnimation();
    }

    navigation();
    modal();


    function navigation() {
        const navToggle = document.querySelector('.js-menu-toggle');
        const navMenu = document.querySelector('.js-menu-navigation');
        navToggle.addEventListener('click', function (evt) {
            evt.preventDefault();
            this.classList.toggle('main-nav__toggle--opened');
            navMenu.classList.toggle('main-nav__list--opened');
        })
    }


    function  heroTextAnimation() {
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


    function infiniteSliderInit(selector) {
        $(selector).slick({
            variableWidth: true,
            focusOnSelect: false,
            accessibility: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 10000,
            arrows: false,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1
        });
    }


    function sliderInit(selector) {
        $(selector).slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            prevArrow: $('.internship-team-slider').find('.js-slider-prev'),
            nextArrow: $('.internship-team-slider').find('.js-slider-next'),
            initialSlide: 1,
            responsive: [
                {
                    breakpoint: 9999,
                    settings: "unslick"
                },
                {
                    breakpoint: 1023,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }


    function tabsInit(selector) {
        const tabs = document.querySelector(selector);
        const tabLinks = [...tabs.querySelectorAll('[data-target]')];
        const tabLinkTargets = [...tabs.querySelectorAll('[data-content]')];

        tabLinks.forEach((link) => {
            link.addEventListener('click', function (evt) {
                evt.preventDefault();
                tabLinks.forEach(link => link.classList.remove('tabs__button--active'));
                this.classList.add('tabs__button--active');

                const linkTarget = tabs.querySelector(`[data-content="${this.dataset.target}"]`);
                tabLinkTargets.forEach(target => target.classList.remove('tabs__content--visible'));
                linkTarget.classList.add('tabs__content--visible');
            });
        });
    }


    function modal() {
        const openModalButton = document.querySelectorAll('.js-open-modal');
        const modalOverlay = document.querySelector('.modal-overlay');
        let id;

        openModalButton.forEach(button => {
            button.addEventListener('click', function (evt) {
                evt.preventDefault();
                id = this.dataset.target;
                openModal(id);
            });
        });
        modalOverlay.addEventListener('click', function (evt) {
            const modal = modalOverlay.querySelector(`#${id}`);
            const closeModalButton = modal.querySelector('.js-close-modal');
            if (evt.target === this || evt.target === closeModalButton) {
                closeModal(id);
            }
        });


        function openModal(id) {
            modalOverlay.style.display = 'block';
            setTimeout(() => {
                modalOverlay.classList.add('modal-overlay--active');
                modalOverlay.querySelector(`#${id}`).classList.add('modal--active');
                modalOverlay.querySelector('.js-close-modal').focus();
            }, 10);
            document.body.classList.add('modal-is-open');
        }

        function closeModal(id) {
            modalOverlay.classList.remove('modal-overlay--active');
            modalOverlay.querySelector(`#${id}`).classList.remove('modal--active');
            setTimeout(() => {
                modalOverlay.style.display = 'none';
            }, 300);
            document.body.classList.remove('modal-is-open');
        }
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


    function gridImageHighlight(delay) {
        const images = document.querySelectorAll('.js-product-hero-image');
        const maxLength = images.length - 1;
        const highlightAmount = 2;

        const interval = setInterval(() => {
            for (let i = 0; i < highlightAmount; i++) {
                const currentImage = images[getRandomRange(0, maxLength)];
                currentImage.classList.add('product-hero-grid__image--highlighted');

                setTimeout(() => {
                    const prevImage = currentImage;
                    prevImage.classList.remove('product-hero-grid__image--highlighted');
                }, delay);
            }
        },delay);
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