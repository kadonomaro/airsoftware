<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once '../partials/favicon.php'?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/assets/css/style.css">
    <title>Наша продукция - Airsoftware</title>
</head>
<body class="product-page">
<!--    --><?php //include_once '../partials/page-header.php'?>


    <main class="hero">
        <canvas class="hero__canvas js-product-canvas"></canvas>
        <?php include_once '../partials/page-header.php'?>
        <div class="hero__body">
            <h1 class="hero__title">Airsoftware</h1>
            <span class="hero__subtitle">Современные решения для бизнеса</span>
        </div>

    </main><!--hero-->


    <section class="product-overview section">
        <header class="section__header">
            <h2 class="section__title section__title--dark">Обзор основных продуктов нашей компании</h2>
            <span class="section__subtitle section__subtitle--dark">Выберите нужное решение под свой бизнес</span>
        </header>

        <div class="product-overview__inner">
            <div class="product-overview__main">
                <div class="product-overview__text">
                    <h3 class="product-overview__name">Address Book</h3>
                    <span class="product-overview__desc">Управление контактами еще никогда не было таким удобным</span>

                    <div class="product-overview__item js-product-overview-trigger" data-target="1">
                        <span class="product-overview__title">Заголовок 1</span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad animi doloremque ducimus esse est eveniet exercitationem expedita facere,
                            inventore ipsa iusto libero magnam maiores minima minus natus omnis possimus qui, quis quod reiciendis rem rerum sed suscipit ut vel vero voluptatum?
                            Dolore earum esse est impedit nobis odit saepe voluptate!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quod tempore veniam vitae!
                            Accusantium ad adipisci aliquam culpa cum, doloremque eos et fuga id, impedit,
                            maxime minima natus non officia omnis pariatur quia saepe sit sunt voluptatem?
                            Aut illo maxime natus odit porro quo repudiandae sequi. Adipisci ducimus exercitationem iste?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quod tempore veniam vitae!
                            Accusantium ad adipisci aliquam culpa cum, doloremque eos et fuga id, impedit,
                            maxime minima natus non officia omnis pariatur quia saepe sit sunt voluptatem?
                            Aut illo maxime natus odit porro quo repudiandae sequi. Adipisci ducimus exercitationem iste?
                        </p>
                    </div>

                    <div class="product-overview__item js-product-overview-trigger" data-target="2">
                        <span class="product-overview__title">Заголовок 2</span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad animi doloremque ducimus esse est eveniet exercitationem expedita facere,
                            inventore ipsa iusto libero magnam maiores minima minus natus omnis possimus qui, quis quod reiciendis rem rerum sed suscipit ut vel vero voluptatum?
                            Dolore earum esse est impedit nobis odit saepe voluptate!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quod tempore veniam vitae!
                            Accusantium ad adipisci aliquam culpa cum, doloremque eos et fuga id, impedit,
                            maxime minima natus non officia omnis pariatur quia saepe sit sunt voluptatem?
                            Aut illo maxime natus odit porro quo repudiandae sequi. Adipisci ducimus exercitationem iste?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quod tempore veniam vitae!
                            Accusantium ad adipisci aliquam culpa cum, doloremque eos et fuga id, impedit,
                            maxime minima natus non officia omnis pariatur quia saepe sit sunt voluptatem?
                            Aut illo maxime natus odit porro quo repudiandae sequi. Adipisci ducimus exercitationem iste?
                        </p>
                    </div>
                    <div class="product-overview__item js-product-overview-trigger" data-target="3">
                        <span class="product-overview__title">Заголовок 3</span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad animi doloremque ducimus esse est eveniet exercitationem expedita facere,
                            inventore ipsa iusto libero magnam maiores minima minus natus omnis possimus qui, quis quod reiciendis rem rerum sed suscipit ut vel vero voluptatum?
                            Dolore earum esse est impedit nobis odit saepe voluptate!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quod tempore veniam vitae!
                            Accusantium ad adipisci aliquam culpa cum, doloremque eos et fuga id, impedit,
                            maxime minima natus non officia omnis pariatur quia saepe sit sunt voluptatem?
                            Aut illo maxime natus odit porro quo repudiandae sequi. Adipisci ducimus exercitationem iste?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quod tempore veniam vitae!
                            Accusantium ad adipisci aliquam culpa cum, doloremque eos et fuga id, impedit,
                            maxime minima natus non officia omnis pariatur quia saepe sit sunt voluptatem?
                            Aut illo maxime natus odit porro quo repudiandae sequi. Adipisci ducimus exercitationem iste?
                        </p>
                    </div>

                </div>
            </div>
            <div class="product-overview__side">
                <div class="product-overview__screen js-overview-screen">
                    <div class="product-overview__image js-product-overview-target" data-image="1">
                        <picture>
                            <source type="image/webp" media="(max-width: 450px)" srcset="/dist/assets/image/product-overview/address-book-1.webp">
                            <source media="(max-width: 450px)" srcset="/dist/assets/image/product-overview/address-book-1.png">
                            <source type="image/webp" srcset="/dist/assets/image/product-overview/address-book-1.webp">
                            <img class="product-overview__image-img" src="/dist/assets/image/product-overview/address-book-1.png" alt="" >
                        </picture>
                    </div>
                    <div class="product-overview__image product-overview__image--hidden js-product-overview-target" data-image="2">
                        <picture>
                            <source type="image/webp" media="(max-width: 450px)" srcset="/dist/assets/image/product-overview/address-book-2.webp">
                            <source media="(max-width: 450px)" srcset="/dist/assets/image/product-overview/address-book-2.png">
                            <source type="image/webp" srcset="/dist/assets/image/product-overview/address-book-2.webp">
                            <img class="product-overview__image-img" src="/dist/assets/image/product-overview/address-book-2.png" alt="" >
                        </picture>
                    </div>
                    <div class="product-overview__image product-overview__image--hidden js-product-overview-target" data-image="3">
                        <picture>
                            <source type="image/webp" media="(max-width: 450px)" srcset="/dist/assets/image/product-overview/address-book-3.webp">
                            <source media="(max-width: 450px)" srcset="/dist/assets/image/product-overview/address-book-3.png">
                            <source type="image/webp" srcset="/dist/assets/image/product-overview/address-book-3.webp">
                            <img class="product-overview__image-img" src="/dist/assets/image/product-overview/address-book-3.png" alt="" >
                        </picture>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <?php include_once '../partials/page-footer.php'?>


    <div class="modal-overlay">
        <div class="modal" id="order-modal">
            <button class="modal__close js-close-modal" aria-label="close modal">
                <svg class="modal__close-icon" fill="#a0a0a0" width="100%" height="100%" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M10.415 9L15 13.584 13.587 15 9 10.415 4.413 15 3 13.584 7.585 9 3 4.416 4.413 3 9 7.585 13.587 3 15 4.416 10.415 9z"></path>
                </svg>
            </button>
            <span class="modal__title">Оставьте заявку прямо сейчас</span>
            <span class="modal__subtitle">Будь в курсе последних новостей</span>
            <form action="" class="order">
                <button class="order__button button">Присоединиться</button>
            </form>
        </div>
    </div>

    <script src="../dist/assets/js/main.js"></script>
</body>
</html>