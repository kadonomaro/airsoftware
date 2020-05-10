export default class Validation {
    constructor() {
        this.errorMessage = '';
        this.isInvalid = false;
    }

    setError(message) {
        this.errorMessage = message;
        this.isInvalid = true;
        console.log(this.errorMessage);
    }

    removeError() {
        this.errorMessage = '';
        this.isInvalid = false;
        console.log(this.errorMessage);
    }


    validate({fields, rules = {required: false, minLength: 0, maxLength: 0, pattern: ''}}) {
        fields.forEach(field => {
           field.addEventListener('input', (evt) => {

               const value = evt.target.value;

                if (rules.required && !this.isInvalid) {
                    if (value.trim().length) {
                        this.removeError();
                    } else {
                        this.setError('Поле обязательно для заполнения');
                    }
                }

                if (rules.pattern && !this.isInvalid) {
                    if (rules.pattern.test(String(value).toLowerCase())) {
                        this.removeError();
                    } else {
                        this.setError('Неверный формат');
                    }
                }

                if (rules.minLength && !this.isInvalid) {
                    if (value.length >= rules.minLength) {
                        this.removeError();
                    } else {
                        this.setError(`Минимальная длина не должна быть менее ${rules.minLength} символов`);
                    }
                }

                if (rules.maxLength && !this.isInvalid) {
                    if (value.length <= rules.maxLength) {
                        this.removeError();
                    } else {
                        this.setError(`Максимальная длина не должна быть более ${rules.maxLength} символов`);
                    }
                }

               this.isInvalid ? field.classList.add('input--error') : field.classList.remove('input--error');

           });
        });
    }

}