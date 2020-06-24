import lazyMap from "@/js/lib/lazyMap";
import magicScroll from "@/js/lib/magicScroll";
import FormValidation from "@/js/lib/FormValidation";
import FormSender from "@/js/lib/FormSender";
import navigation from "@/js/lib/navigation";
import order from "@/js/lib/order";
import modalInit from "@/js/lib/modalInit";


document.addEventListener('DOMContentLoaded', () => {
    lazyMap('.js-company-map');
    magicScroll();
    visitEmailSend();
    navigation();
    order();
    modalInit();

    function visitEmailSend() {
        const visitForms = document.querySelectorAll('[name=visit]');
        const formValidation = new FormValidation({
            forms: visitForms
        });

        formValidation.validate(function (form) {
            console.log(form);
            const sender = new FormSender({
                url: '/php/visit-mail.php',
                form: form
            });

            sender.send().then(() => form.reset());
        });
    }
});