import FormValidation from "./FormValidation";

export default function order() {
    const orderForm = document.querySelectorAll('[name=order]');

    const formValidation = new FormValidation({
        forms: orderForm
    });

    formValidation.validate();
}