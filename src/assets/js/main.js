document.addEventListener('DOMContentLoaded', () => {
    runHeroAnimation();

    function runHeroAnimation() {
        const canvas = document.querySelector('.js-hero-canvas');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        ctx.font = "bold 16px Arial";
        ctx.fillStyle = '#3bb43e';

        render(20,20,10);


        function render(cellWidth = 20, cellHeight = 20, speed = 100) {
            const renderCount = (canvas.width / cellWidth) * (canvas.height / cellHeight);
            let counter = 0;

            const interval = setInterval(function(){
                ctx.fillText(
                    getRandomSymbol(48, 122),
                    Math.ceil(getRandomRange(0, canvas.width) / cellWidth) * cellWidth,
                    Math.ceil(getRandomRange(0, canvas.height) / cellHeight) * cellHeight,
                );
                counter++;
                if(counter === renderCount) {
                    clearInterval(interval);
                }
            }, speed);

            ctx.fill();
        }

        function getRandomSymbol(start, end) {
            return String.fromCharCode(getRandomRange(start, end));
        }

        function getRandomRange(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    }
});