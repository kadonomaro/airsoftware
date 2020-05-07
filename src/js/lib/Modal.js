export default class Modal {
    constructor({openButtonSelector}) {
        this.openButton = document.querySelectorAll(openButtonSelector);
        this.modalOverlay = document.querySelector('.modal-overlay');
        this.id = null;
    }

    init() {
        if (this.openButton) {
            this.openButton.forEach(button => {
                button.addEventListener('click', (evt) => {
                    evt.preventDefault();
                    this.id = button.dataset.target;
                    this.open(this.id);
                });
            });
        }
    }

    open(id = this.openButton.dataset.target) {
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