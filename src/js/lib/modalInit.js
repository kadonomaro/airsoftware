import Modal from "@/js/lib/Modal";

export default function modalInit() {
    const modal = new Modal({
        openButtonSelector: '.js-open-modal'
    });
    modal.init();
}