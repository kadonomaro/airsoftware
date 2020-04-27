<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once '../partials/favicon.php'?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="/dist/assets/css/style.css">
    <title>Ежегодная стажировка в Airsoftware</title>
    <meta name="description" content="Ежегодная стажировка для студентов и желающих. Опытные наставники и четкий учебный план - Airsoftware">
</head>
<body class="internship-page">

    <main class="internship-hero">
        <div class="internship-hero__header">
            <?php include_once '../partials/page-header.php'?>
        </div>
        <div class="internship-hero__content">
            <div class="internship-hero__promo">
                <h1 class="internship-hero__title">Хочешь стать частью команды профессионалов?</h1>
                <div class="internship-hero__team">
                    <div class="internship-team">
                        <div class="internship-team__list js-internship-team-slider">
                            <div class="internship-team__item internship-team__item--first">
                                <picture>
                                    <source type="image/webp" srcset="/dist/assets/image/internship/intern-1.webp">
                                    <img class="internship-team__image" src="/dist/assets/image/internship/intern-1.png" alt="Парень стажер" >
                                </picture>
                            </div>
                            <div class="internship-team__item internship-team__item--center-left">
                                <picture>
                                    <source type="image/webp" srcset="/dist/assets/image/internship/intern-2.webp">
                                    <img class="internship-team__image" src="/dist/assets/image/internship/intern-2.png" alt="Парень стажер" >
                                </picture>
                            </div>
                            <div class="internship-team__item internship-team__item--center">
                                <picture>
                                    <source type="image/webp" srcset="/dist/assets/image/internship/rowan.webp">
                                    <img class="internship-team__image" src="/dist/assets/image/internship/rowan.png" alt="Стажер Роуэн" >
                                </picture>
                            </div>
                            <div class="internship-team__item internship-team__item--center-right">
                                <picture>
                                    <source type="image/webp" srcset="/dist/assets/image/internship/intern-3.webp">
                                    <img class="internship-team__image" src="/dist/assets/image/internship/intern-3.png" alt="Девушка стажер" >
                                </picture>
                            </div>
                            <div class="internship-team__item internship-team__item--last">
                                <picture>
                                    <source type="image/webp" srcset="/dist/assets/image/internship/intern-4.webp">
                                    <img class="internship-team__image" src="/dist/assets/image/internship/intern-4.png" alt="Девушка стажер" >
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main><!-- ./internship-hero -->


    <section class="internship-about section">
        <div class="container">

            <header class="section__header">
                <h2 class="section__title">Ежегодная оплачиваемая стажировка</h2>
                <span class="section__subtitle">Хочешь за короткий срок прокачаться свои знания?</span>
            </header>

            <div class="internship-about__inner">
                <div class="internship-about__item js-internship-item">
                    <div class="internship-about__side">
                        <div class="internship-about__image">
                            <picture>
                                <source type="image/webp" srcset="/dist/assets/image/internship/item-1.webp">
                                <img src="/dist/assets/image/internship/item-1.jpg" alt="Основные направления">
                            </picture>
                        </div>
                    </div>
                    <div class="internship-about__main">
                        <div class="internship-about__text">
                            <h3 class="internship-about__title">Основные направления</h3>
                            <p>Ты можешь сам выбрать интересующее тебя направление:</p>
                            <ul>
                                <li>Frontend</li>
                                <li>Backend</li>
                                <li>UX/UI дизайнер</li>
                                <li>Тестировщик</li>
                                <li>Аналитик</li>
                                <li>Менеджер проектов</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="internship-about__item js-internship-item">
                    <div class="internship-about__side">
                        <div class="internship-about__image">
                            <picture>
                                <source type="image/webp" srcset="/dist/assets/image/internship/item-2.webp">
                                <img src="/dist/assets/image/internship/item-2.jpg" alt="Опытные наставники">
                            </picture>
                        </div>
                    </div>
                    <div class="internship-about__main">
                        <div class="internship-about__text">
                            <h3 class="internship-about__title">Опытные наставники</h3>
                            <p>
                                К каждой группе стажеров будет приставлен свой опытный наставник, который обучил уже
                                не один десяток человек. Группы делятся по направлениям, но не более 15 человек в каждой.
                                Таким образом мы гарантируем, что времени наставника хватит на всех.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="internship-about__item js-internship-item">
                    <div class="internship-about__side">
                        <div class="internship-about__image">
                            <picture>
                                <source type="image/webp" srcset="/dist/assets/image/internship/item-3.webp">
                                <img src="/dist/assets/image/internship/item-3.jpg" alt="Реальные условия">
                            </picture>
                        </div>
                    </div>
                    <div class="internship-about__main">
                        <div class="internship-about__text">
                            <h3 class="internship-about__title">Реальные условия</h3>
                            <p>
                                Мы максимально приблизили условия стажировки к реальным. Вы получите практический опыт
                                и навыки работы в боевых условиях. Жесткие дедлайны и требовательные заказчики.
                            </p>
                            <p>
                                В первый месяц вы познакомитесь с действующей командой разработчиков и своим наставником.
                                Минимум времени на адаптацию. Поэтому вы уже должны обладать базовыми знаниями
                                по выбранному направлению.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="internship-about__item js-internship-item">
                    <div class="internship-about__side">
                        <div class="internship-about__image">
                            <picture>
                                <source type="image/webp" srcset="/dist/assets/image/internship/item-4.webp">
                                <img src="/dist/assets/image/internship/item-4.jpg" alt="Несколько направлений стажировки">
                            </picture>
                        </div>
                    </div>
                    <div class="internship-about__main">
                        <div class="internship-about__text">
                            <h3 class="internship-about__title">Работа в компании</h3>
                            <p>
                                По окончанию обучения, все лучшие стажеры будут приняты на работу в нашу компанию.
                                Уже сейчас у нас работает более 50 бывших учеников. Некоторые из них стали наставниками для
                                новых стажеров.
                            </p>
                            <p>
                                <b>Успей подать заявку до 28 августа.</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </section><!-- ./internship-about -->


    <section class="internship-join section">
        <div class="container">

            <header class="section__header">
                <h2 class="section__title section__title--dark">Присоединись к команде мечты</h2>
            </header>

            <form action="" method="post" class="internship-join__form">
                <div class="internship-join__text">
                    <p>Напиши пару слов о себе:</p>
                    <ul>
                        <li>Немного личной информации (имя, возраст, учился/работал)</li>
                        <li>Почему ты хочешь этим заниматься</li>
                        <li>Коротко оцени свои текущие навыки</li>
                        <li>Что хочешь получить от стажировки</li>
                        <li>Пару нейтральных предложений на английском языке (без переводчика, это важно)</li>
                        <li>Ссылки на примеры твоих работ</li>
                    </ul>
                </div>
                <textarea class="internship-join__textarea" name="internship-join-about"></textarea>
                <div class="internship-join__footer">
                    <button class="internship-join__button button">Отправить</button>
                </div>
            </form>

        </div><!-- /.container -->

    </section><!-- /.internship-subscribe -->



    <?php include_once '../partials/page-footer.php'?>


    <div class="modal-overlay">
        <?php include_once '../partials/order-modal.php'?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="../dist/assets/js/main.js"></script>
</body>
</html>