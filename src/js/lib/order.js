import FormValidation from "./FormValidation";
import FormSender from "@/js/lib/FormSender";

export default function order() {
    const orderForms = document.querySelectorAll('[name=order]');

    const formValidation = new FormValidation({
        forms: orderForms
    });

    formValidation.validate(function () {
        const sender = new FormSender({
            url: '',
            forms: orderForms
        });
        sender.send()
            .then(() => {
                orderForms.forEach(form => form.reset());
            });
    });
}