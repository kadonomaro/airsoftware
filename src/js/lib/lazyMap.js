export default function lazyMap(mapSelector) {

    const mapContainer = document.querySelector(mapSelector);
    let isLoaded = false;
    const initOptions = {
        once: true,
        passive: true,
        capture: true
    };


    mapContainer.addEventListener('click', startLazyMap, initOptions);
    mapContainer.addEventListener('mouseover', startLazyMap, initOptions);
    mapContainer.addEventListener('touchstart', startLazyMap, initOptions);
    mapContainer.addEventListener('touchmove', startLazyMap, initOptions);


    function startLazyMap() {
        if (!isLoaded) {
            const mapBlock = document.querySelector('.js-lazy-map');
            isLoaded = true;

            mapBlock.setAttribute('src', mapBlock.getAttribute('data-src'));

            mapContainer.removeEventListener('click', startLazyMap);
            mapContainer.removeEventListener('mouseover', startLazyMap);
            mapContainer.removeEventListener('touchstart', startLazyMap);
            mapContainer.removeEventListener('touchmove', startLazyMap);
        }
    }
}
