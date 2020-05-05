export default function mailSender() {
    const joinForm = document.querySelector('.js-join-form');

    joinForm.addEventListener('submit', function (evt) {
        evt.preventDefault();
        fetch('/php/mail.php', {
            method: 'POST',
            body: new FormData(joinForm)
        })
            .then(response => {
                joinForm.reset();
            })
            .catch(err => {
                console.warn(err)
            });
    });
}