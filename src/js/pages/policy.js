import navigation from "@/js/lib/navigation";
import order from "@/js/lib/order";
import Modal from "@/js/lib/Modal";

document.addEventListener('DOMContentLoaded', () => {
    navigation();
    order();
    const modal = new Modal();
});