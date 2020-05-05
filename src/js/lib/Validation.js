export default class Validation {
    constructor() {

    }

    /**
     *
     * @param {HTMLElement} fields
     * @returns {boolean} validation status
     */
    validateName({fields, rules = {required: false, minLength: 0, maxLength: 0,}}) {
        let error = '';
        fields.forEach(field => {
           field.addEventListener('input', function (evt) {
                if (rules.required) {
                    console.log('Поле обязательно для заполнения');
                    return this.value.trim().length > 0;
                }
                if (rules.minLength) {
                    console.log(`Минимальная длина не должна быть менее ${rules.minLength} символов`);
                    return this.value.length >= rules.minLength
                }
                if (rules.maxLength) {
                    console.log(`Максимальная длина не должна быть более ${rules.maxLength} символов`);
                    return this.value.length <= rules.maxLength;
                }
                if (rules.minLength && rules.maxLength) {
                    console.log(`Длина должна быть в диапазоне от ${rules.minLength} до ${rules.maxLength}`);
                    return this.value.length >= rules.minLength && this.value.length <= rules.maxLength
                }
           });
        });
    }

    /**
     *
     * @param {HTMLElement} fields
     * @returns {boolean} validation status
     */
    validatePhone(fields) {

    }

    /**
     *
     * @param {HTMLElement} fields
     * @returns {boolean} validation status
     */
    validateEmail(fields) {

    }
}