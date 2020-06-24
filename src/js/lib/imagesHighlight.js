import { getRandomRange } from "../helpers/randomizer";

export default function imagesHighlight({images = {parent: null, highlightClass: null}, delay}) {
    const parent = document.querySelector(images.parent);
    const imagesElements = parent.children;
    const maxLength = imagesElements.length - 1;
    const highlightAmount = 2;

    if (getComputedStyle(parent).getPropertyValue('display')) {
        const interval = setInterval(() => {
            for (let i = 0; i < highlightAmount; i++) {
                const currentImage = imagesElements[getRandomRange(0, maxLength)];
                currentImage.classList.add(images.highlightClass);

                setTimeout(() => {
                    const prevImage = currentImage;
                    prevImage.classList.remove(images.highlightClass);
                }, delay);
            }
        }, delay);
    }
}