export default class FormValidation {
    constructor({forms}) {
        this.forms = forms;
    }

    validate() {
        this.forms.forEach(form => {
            form.addEventListener('submit', (evt) => {
               evt.preventDefault();
               [...evt.target.elements].forEach(element => {
                   console.log(element.validity.valid);
                   console.log(element.validationMessage);
               });
            });
        })
    }
}