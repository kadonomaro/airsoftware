export default class Modal {
    constructor() {
        this.modalOverlay = document.querySelector('.modal-overlay');
        this.id = null;
        this.init();
    }

    init() {
        document.addEventListener('click', (event) => {
            if (event.target.dataset.target) {
                this.id = event.target.dataset.target;
                this.open(this.id);
            }
        });
    }

    open(id) {
        this.modalOverlay.addEventListener('click', (evt) => {
            const modal = this.modalOverlay.querySelector(`#${id}`);
            const closeModalButton = modal.querySelector('.js-close-modal');
            if (evt.target === this.modalOverlay || evt.target === closeModalButton) {
                this.close(id);
            }
        });

        this.modalOverlay.style.display = 'block';
        setTimeout(() => {
            this.modalOverlay.classList.add('modal-overlay--active');
            this.modalOverlay.querySelector(`#${id}`).classList.add('modal--active');
            this.modalOverlay.querySelector('.js-close-modal').focus();
        }, 10);
        document.body.classList.add('modal-is-open');
    }

    close(id) {
        this.modalOverlay.classList.remove('modal-overlay--active');
        this.modalOverlay.querySelector(`#${id}`).classList.remove('modal--active');
        setTimeout(() => {
            this.modalOverlay.style.display = 'none';
        }, 300);
        document.body.classList.remove('modal-is-open');
    }
}