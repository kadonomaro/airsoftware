export default class FormValidation {
    constructor({forms}) {
        this.forms = forms;
    }

    validate() {
        this.forms.forEach(form => {
            form.addEventListener('submit', (evt) => {
               evt.preventDefault();
               [...evt.target.elements].forEach(element => {
                   console.dir(element);
                   const errorMessageBlock = element.closest('label').querySelector('.js-validation-error');
                   if (errorMessageBlock) {
                       errorMessageBlock.textContent = element.validationMessage;
                   }
                   element.validity.valid ? element.classList.remove('input--error') : element.classList.add('input--error');
               });
            });
        })
    }
}