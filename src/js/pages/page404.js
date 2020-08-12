import Canvas2D from "@/js/lib/Canvas2D";
import navigation from "@/js/lib/navigation";
import order from "@/js/lib/order";
import Modal from "@/js/lib/Modal";

document.addEventListener('DOMContentLoaded', () => {

    canvasAnimation();
    navigation();
    order();
    const modal = new Modal('.js-open-modal');

    function canvasAnimation() {
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
});