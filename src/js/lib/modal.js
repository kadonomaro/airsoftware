export default function modal() {
    const openModalButton = document.querySelectorAll('.js-open-modal');
    const modalOverlay = document.querySelector('.modal-overlay');
    let id;

    openModalButton.forEach(button => {
        button.addEventListener('click', function (evt) {
            evt.preventDefault();
            id = this.dataset.target;
            openModal(id);
        });
    });
    modalOverlay.addEventListener('click', function (evt) {
        const modal = modalOverlay.querySelector(`#${id}`);
        const closeModalButton = modal.querySelector('.js-close-modal');
        if (evt.target === this || evt.target === closeModalButton) {
            closeModal(id);
        }
    });


    function openModal(id) {
        modalOverlay.style.display = 'block';
        setTimeout(() => {
            modalOverlay.classList.add('modal-overlay--active');
            modalOverlay.querySelector(`#${id}`).classList.add('modal--active');
            modalOverlay.querySelector('.js-close-modal').focus();
        }, 10);
        document.body.classList.add('modal-is-open');
    }

    function closeModal(id) {
        modalOverlay.classList.remove('modal-overlay--active');
        modalOverlay.querySelector(`#${id}`).classList.remove('modal--active');
        setTimeout(() => {
            modalOverlay.style.display = 'none';
        }, 300);
        document.body.classList.remove('modal-is-open');
    }
}