document.addEventListener('DOMContentLoaded', () => {
    runHeroAnimation();

    function runHeroAnimation() {
        const canvas = document.querySelector('.js-hero-canvas');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const width = canvas.width;
        const height = canvas.height;

        ctx.font = "bold 16px Arial";
        ctx.fillStyle = '#3bb43e';

        render(20,20,10);


        function render(cellWidth = 20, cellHeight = 20, speed = 100) {
            const renderCount = (width / cellWidth) * (height / cellHeight);
            let counter = 0;
            const positions = [];

            const interval = setInterval(() => {
                const position = {
                    x: Math.ceil(getRandomRange(0, width) / cellWidth) * cellWidth,
                    y: Math.ceil(getRandomRange(0, height) / cellHeight) * cellHeight,
                };

                if (!positions.some(pos => pos.x === position.x && pos.y === position.y)) {
                    ctx.fillText(getRandomSymbol(65, 122), position.x, position.y);
                    counter--;
                }
                positions.push(position);

                counter++;
                if (counter >= renderCount) {
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
});