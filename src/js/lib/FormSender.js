export default class FormSender {
    constructor({url, form}) {
        this.url = url;
        this.form = form;
    }

    send() {
        return new Promise((resolve, reject) => {
            this.form.addEventListener('submit', (evt) => {
                evt.preventDefault();
                fetch(this.url, {
                    method: 'POST',
                    body: new FormData(evt.target)
                })
                    .then(() => resolve())
                    .catch((err) => reject(err));
            }, {once: true});
        });
    }
}

