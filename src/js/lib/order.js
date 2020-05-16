import FormValidation from "./FormValidation";
import FormSender from "@/js/lib/FormSender";

export default function order() {
    const orderForms = document.querySelectorAll('[name=order]');

    const formValidation = new FormValidation({
        forms: orderForms
    });

    formValidation.validate(function (form) {
        const sender = new FormSender({
            url: '/php/order-mail.php',
            form: form
        });

        sender.send().then(() => form.reset());
    });
}