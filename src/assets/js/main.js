document.addEventListener('DOMContentLoaded', () => {
    heroCanvasAnimation();
    heroTextAnimation();
    infiniteSliderInit('.js-clients-slider');

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
});