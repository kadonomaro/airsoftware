export default class FormValidation {
    constructor({forms}) {
        this.forms = forms;
    }

    validate(callback) {
        this.forms.forEach(form => {
            form.addEventListener('submit', evt => {
               evt.preventDefault();
               const elements = [...evt.target.elements];

               elements.forEach(element => {
                   if (element.closest('label')) {
                       const errorMessageBlock = element.closest('label').querySelector('.js-validation-error');
                       if (errorMessageBlock) {
                           errorMessageBlock.textContent = element.validationMessage;
                           errorMessageBlock.textContent ?
                               errorMessageBlock.classList.add('form__error--visible') :
                               errorMessageBlock.classList.remove('form__error--visible');
                       }
                       element.validity.valid ? element.classList.remove('input--error') : element.classList.add('input--error');
                   }
               });

                let isValid = !elements.filter(element => element.validity.valid === false).length;
                if (isValid && typeof callback === 'function') {
                    callback(evt.target);
                }

            });
        })
    }
}