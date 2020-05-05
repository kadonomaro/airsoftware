export default function tabs(selector) {
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