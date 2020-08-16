<header class="page-header">
    <div class="page-header__logo">
        <div class="logo">
            <div class="logo__image">
                <?php if(preg_match('/^\/$/', $_SERVER['REQUEST_URI'])): ?>
                <img src="/dist/assets/image/logo.svg" alt="Airsoftware">
                <?php else: ?>
                <a class="logo__link" href="/">
                    <img src="/dist/assets/image/logo.svg" alt="Airsoftware">
                </a>
                <?php endif ?>
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
                    <a href="/products" class="main-nav__link <?php echo $_SERVER['REQUEST_URI'] === '/products/' ? 'main-nav__link--active' : '' ?>">Продукты</a>
                </li>
                <li class="main-nav__item main-nav__item--sub">
                    <a href="javascript:void(0);" class="main-nav__link <?php echo $_SERVER['REQUEST_URI'] === '/information/' ? 'main-nav__link--active' : '' ?>">Информация</a>
                    <ul class="main-nav__submenu">
                        <li class="main-nav__item">
                            <a href="/about" class="main-nav__link main-nav__link--sub <?php echo $_SERVER['REQUEST_URI'] === '/about/' ? 'main-nav__link--active' : '' ?>">О компании</a>
                        </li>
                        <li class="main-nav__item">
                            <a href="/internship" class="main-nav__link main-nav__link--sub <?php echo $_SERVER['REQUEST_URI'] === '/internship/' ? 'main-nav__link--active' : '' ?>">Стажировка</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="page-header__order">
        <button class="button" data-target-modal="order-modal">Присоединиться</button>
    </div>
</header>