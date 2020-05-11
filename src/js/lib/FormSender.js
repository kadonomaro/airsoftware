export default class FormSender {
    constructor({url, forms}) {
        this.url = url;
        this.forms = forms;
    }

    send() {
        return new Promise((resolve, reject) => {
            this.forms.forEach(form => {
                form.addEventListener('submit', (evt) => {
                    evt.preventDefault();
                    fetch(this.url, {
                        method: 'POST',
                        body: new FormData(form)
                    })
                        .then((response) => resolve(response))
                        .catch((err) => reject(err));
                }, {once: true})
            });
        });
    }
}

