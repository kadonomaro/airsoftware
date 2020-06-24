import FormValidation from "@/js/lib/FormValidation";
import FormSender from "@/js/lib/FormSender";
import Modal from "@/js/lib/Modal";
import { internshipTeamSlider } from "@/js/lib/sliders";
import navigation from "@/js/lib/navigation";
import order from "@/js/lib/order";
import modalInit from "@/js/lib/modalInit";

document.addEventListener('DOMContentLoaded', () => {

    scrollObserver();
    internshipTeamSlider('.js-internship-team-slider');
    joinEmailSend();
    navigation();
    order();
    modalInit();

    function scrollObserver() {
        const items = document.querySelectorAll('.js-internship-item');

        const options = {
            root: null,
            rootMargin: `0px 0px ${window.innerWidth > 767 ? "50%" : "100%"} 0px`,
            threshold: 0.50
        };

        function callback(entries) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('internship-about__item--visible');
                }
            });
        }

        const observer = new IntersectionObserver(callback, options);

        items.forEach((item) => {
            observer.observe(item);
        });
    }

    function joinEmailSend() {
        const joinForm = document.querySelector('.js-join-form');

        const formValidation = new FormValidation({
            forms: [joinForm]
        });

        formValidation.validate(function () {
            const sender = new FormSender({
                url: '/php/join-mail.php',
                form: joinForm
            });

            sender.send()
                .then(() => {
                    joinForm.reset();
                    const modal = new Modal({
                        openButtonSelector: '.js-open-modal'
                    });
                    modal.open('thanks-modal');
                });
        });
    }
});