document.addEventListener('DOMContentLoaded', () => {

    if (document.body.classList.contains('main-page')) {
        heroCanvasAnimation();
        heroTextAnimation();
        infiniteSliderInit('.js-clients-slider');
        tabsInit('.js-tabs');
    }
    navigation();
    modal();


    function navigation() {
        const navToggle = document.querySelector('.js-menu-toggle');
        const navMenu = document.querySelector('.js-menu-navigation')
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
        const canvas = document.querySelector('.js-hero-canvas');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const width = canvas.width;
        const height = canvas.height;

        ctx.font = "bold 16px Roboto";

        render(20,20,10);


        function render(cellWidth = 20, cellHeight = 20, speed = 100) {
            const renderCount = (width / cellWidth) * (height / cellHeight);
            const renderLimit = renderCount - renderCount * 0.5;
            let counter = 0;
            const positions = [];
            const colors = ['#e6e6e6','#cdcdcd', '#b4b4b4', '#9b9b9b'];

            const interval = setInterval(() => {
                const position = {
                    x: Math.ceil(getRandomRange(0, width) / cellWidth) * cellWidth,
                    y: Math.ceil(getRandomRange(0, height) / cellHeight) * cellHeight,
                };

                if (!positions.some(pos => pos.x === position.x && pos.y === position.y)) {
                    ctx.fillStyle = colors[getRandomRange(0, colors.length - 1)];
                    ctx.fillText(getRandomSymbol(65, 122), position.x, position.y);
                    counter++;
                }
                positions.push(position);

                if (counter >= renderLimit) {
                    clearInterval(interval);
                }
            }, speed);
        }

        function getRandomSymbol(start, end) {
            return String.fromCharCode(getRandomRange(start, end));
        }

        function getRandomRange(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    }


    function infiniteSliderInit(sliderSelector) {
        $(sliderSelector).slick({
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
});