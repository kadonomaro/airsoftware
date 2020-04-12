<header class="page-header">
    <div class="page-header__logo">
        <div class="logo">
            <div class="logo__image">
                <img src="/dist/assets/image/logo.svg" alt="Airsoftware">
            </div>
        </div>
    </div>
    <div class="page-header__nav">
        <nav class="main-nav">
            <button class="main-nav__toggle js-menu-toggle" aria-label="menu">
                <svg width="30" height="30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="main-nav__toggle-icon main-nav__toggle-icon--left" cx="15" cy="4" r="3" stroke="#fff" stroke-width="2"/>
                    <circle class="main-nav__toggle-icon main-nav__toggle-icon--left" cx="15" cy="15" r="3" stroke="#fff" stroke-width="2"/>
                    <circle class="main-nav__toggle-icon main-nav__toggle-icon--left" cx="15" cy="26" r="3" stroke="#fff" stroke-width="2"/>
                    <circle class="main-nav__toggle-icon main-nav__toggle-icon--right" cx="15" cy="4" r="3" stroke="#fff" stroke-width="2"/>
                    <circle class="main-nav__toggle-icon main-nav__toggle-icon--right" cx="15" cy="15" r="3" stroke="#fff" stroke-width="2"/>
                    <circle class="main-nav__toggle-icon main-nav__toggle-icon--right" cx="15" cy="26" r="3" stroke="#fff" stroke-width="2"/>
                </svg>
            </button>
            <ul class="main-nav__list js-menu-navigation">
                <li class="main-nav__item">
                    <a href="/" class="main-nav__link <?php echo $_SERVER['REQUEST_URI'] === '/' ? 'main-nav__link--active' : '' ?>">Главная</a>
                </li>
                <li class="main-nav__item">
                    <a href="/products" class="main-nav__link <?php echo $_SERVER['REQUEST_URI'] === '/products/' ? 'main-nav__link--active' : '' ?>">Продукты</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="page-header__order">
        <form action="" class="order">
            <button class="order__button button">Присоединиться</button>
        </form>
    </div>
</header>