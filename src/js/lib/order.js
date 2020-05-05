import Validation from "./Validation";

export default function order() {

    const nameFields = document.querySelectorAll('[name=order-name]');
    const phoneFields = document.querySelectorAll('[name=order-phone]');
    const emailFields = document.querySelectorAll('[name=order-email]');

    const validation = new Validation();

    validation.validateName({
        fields: nameFields,
        rules: {
            required: true,
            minLength: 1,
            maxLength: 50
        }
    });

    validation.validatePhone(phoneFields);
    validation.validateEmail(emailFields);
}