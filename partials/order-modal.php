<div class="modal" id="order-modal">
    <button class="modal__close js-close-modal" aria-label="close modal">
        <svg class="modal__close-icon" fill="#a0a0a0" width="100%" height="100%" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M10.415 9L15 13.584 13.587 15 9 10.415 4.413 15 3 13.584 7.585 9 3 4.416 4.413 3 9 7.585 13.587 3 15 4.416 10.415 9z"></path>
        </svg>
    </button>
    <span class="modal__title">Оставьте заявку и наш менеджер свяжется с вами в ближайшее время</span>
    <div class="order">
        <form action="" name="order" novalidate>
            <label class="form__label" aria-label="selected products">
                <select name="order-product" class="form__select input" required>
                    <option value="">Выберите продукт</option>
                    <option value="address-book">Address Book</option>
                    <option value="todo">Todo Application</option>
                    <option value="transport-control">Transport Control</option>
                </select>
                <span class="form__error js-validation-error"></span>
            </label>
            <label class="form__label" aria-label="user name">
                <input type="text" name="order-name" class="form__input input" placeholder="Ваше имя" required>
                <span class="form__error js-validation-error"></span>
            </label>
            <label class="form__label" aria-label="user phone">
                <input type="tel" name="order-phone" class="form__input input" placeholder="Ваш телефон" required>
                <span class="form__error js-validation-error"></span>
            </label>
            <label class="form__label" aria-label="user email">
                <input type="email" name="order-email" class="form__input input" placeholder="Ваш email" required>
                <span class="form__error js-validation-error"></span>
            </label>
            <label class="form__label">
                <input type="checkbox" name="order-agree" class="checkbox visually-hidden" required>
                <span class="checkbox-custom"></span>
                <span class="form__policy">Я согласен на <a class="link" href="/policy">обработку персональных данных</a></span>
            </label>
            <button type="submit" class="form__button button">Оставить заявку</button>
        </form>
    </div>
</div>