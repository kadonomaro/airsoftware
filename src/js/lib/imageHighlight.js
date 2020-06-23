import { getRandomRange } from "../helpers/randomizer";

export default function imageHighlight({image = {parent: null, highlightClass: null}, delay}) {
    const parent = document.querySelector(image.parent);
    const images = parent.children;
    const maxLength = images.length - 1;
    const highlightAmount = 2;

    if (getComputedStyle(parent).getPropertyValue('display')) {
        const interval = setInterval(() => {
            for (let i = 0; i < highlightAmount; i++) {
                const currentImage = images[getRandomRange(0, maxLength)];
                currentImage.classList.add(image.highlightClass);

                setTimeout(() => {
                    const prevImage = currentImage;
                    prevImage.classList.remove(image.highlightClass);
                }, delay);
            }
        }, delay);
    }
}