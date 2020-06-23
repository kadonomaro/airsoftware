import imageHighlight from "@/js/lib/imageHighlight";

// scrollObservers();
document.addEventListener('DOMContentLoaded', () => {
    imageHighlight({
        image: {
            parent: '.js-product-hero-grid',
            highlightClass: 'product-hero-grid__image--highlighted'
        },
        delay: 2500
    });
});