export default class Validation {
    constructor() {
        this.error = '';
    }

    setError(message) {
        this.error = message;
        console.log(message);
    }


    validate({fields, rules = {required: false, minLength: 0, maxLength: 0,}}) {
        fields.forEach(field => {
           field.addEventListener('input', (evt) => {

                if (rules.required) {
                    if (evt.target.value.trim().length < 1) {
                        evt.target.classList.add('input--error');
                        this.setError('Поле обязательно для заполнения');
                    } else {
                        evt.target.classList.remove('input--error');
                    }
                }

                if (rules.minLength) {
                    if (evt.target.value.length < rules.minLength) {
                        evt.target.classList.add('input--error');
                        this.setError(`Минимальная длина не должна быть менее ${rules.minLength} символов`);
                    } else {
                        evt.target.classList.remove('input--error');
                    }
                }

                if (rules.maxLength) {
                    if (evt.target.value.length > rules.maxLength) {
                        evt.target.classList.add('input--error');
                        this.setError(`Максимальная длина не должна быть более ${rules.maxLength} символов`);
                    } else {
                        evt.target.classList.remove('input--error');
                    }
                }

           });
        });
    }

}