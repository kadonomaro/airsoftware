document.addEventListener('DOMContentLoaded', () => {
    runHeroAnimation();

    function runHeroAnimation() {
        const canvas = document.querySelector('.js-hero-canvas');
        const ctx = canvas.getContext('2d');

        const symbols = [];

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        ctx.font = "16px Arial";
        ctx.fillStyle = '#3bb43e';


        render();

        function render(cellWidth = 15, cellHeight = 15, speed = 100) {
            setTimeout(() => {
                // ctx.fillText("Hello World", 5, 5);
            }, speed);

            for (let w = 0; w <= canvas.width; w += cellWidth) {
                for (let h = 0; h <= canvas.height; h += cellHeight) {
                    ctx.fillText(getRandomSymbol(48, 122), w, h);
                }
            }
            ctx.fill();
        }

        function getRandomSymbol(start, end) {
            return String.fromCharCode(Math.floor(Math.random() * (end - start + 1)) + start)
        }
    }
});