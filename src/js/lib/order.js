import Validation from "./Validation";

export default function order() {

    const nameFields = document.querySelectorAll('[name=order-name]');
    const phoneFields = document.querySelectorAll('[name=order-phone]');
    const emailFields = document.querySelectorAll('[name=order-email]');

    const validation = new Validation();

    validation.validate({
        fields: nameFields,
        rules: {
            required: true,
            maxLength: 50
        }
    });

    validation.validate({
        fields: phoneFields,
        rules: {
            required: true,
            minLength: 6
        }
    });

    validation.validate({
        fields: emailFields,
        rules: {
            required: true,
            minLength: 3
        }
    });


}