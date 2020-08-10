<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once '../partials/favicon.php'?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="/dist/css/style.css">
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
                    <div class="internship-team internship-team-slider">

                        <div class="internship-team-slider__controls">
                            <button class="internship-team-slider__arrow internship-team-slider__arrow--prev js-slider-prev" aria-label="slider prev"></button>
                            <button class="internship-team-slider__arrow internship-team-slider__arrow--next js-slider-next" aria-label="slider next"></button>
                        </div>

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
        <?php include_once '../php/data/internship.php'?>
        <div class="container">

            <header class="section__header">
                <h2 class="section__title">Ежегодная оплачиваемая стажировка</h2>
                <span class="section__subtitle">Хочешь за короткий срок прокачаться свои знания?</span>
            </header>

            <div class="internship-about__inner">
                <? foreach ($internship as $item): ?>
                    <div class="internship-about__item js-internship-item">
                        <div class="internship-about__side">
                            <div class="internship-about__image">
                                <picture>
                                    <source type="image/webp" srcset="<?=$item["src"]?>.webp">
                                    <img src="<?=$item["src"]?>.jpg" alt="<?=$item["title"]?>">
                                </picture>
                            </div>
                        </div>
                        <div class="internship-about__main">
                            <div class="internship-about__text">
                                <h3 class="internship-about__title"><?=$item["title"]?></h3>
                                <?=$item["text"]?>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

        </div><!-- /.container -->
    </section><!-- ./internship-about -->


    <section class="internship-join section">
        <div class="container">

            <header class="section__header">
                <h2 class="section__title section__title--dark">Присоединись к команде мечты</h2>
            </header>

            <div class="internship-join__inner">
                <div class="internship-join__text">
                    <p>Напиши пару слов о себе:</p>
                    <ul>
                        <li>Немного информации об опыте (где учился/работал)</li>
                        <li>Почему ты хочешь этим заниматься</li>
                        <li>Коротко оцени свои текущие навыки</li>
                        <li>Что хочешь получить от стажировки</li>
                        <li>Пару нейтральных предложений на английском языке (без переводчика, это важно)</li>
                        <li>Ссылки на примеры твоих работ</li>
                    </ul>
                </div>
                <div class="internship-join__form form">
                    <form action="" method="post" class="js-join-form" name="join-form" novalidate>
                        <label class="form__label" aria-label="user name">
                            <input class="form__input input" type="text" name="internship-join-name" placeholder="Имя" required>
                            <span class="form__error js-validation-error"></span>
                        </label>
                        <label class="form__label" aria-label="user text">
                            <textarea class="form__textarea input" name="internship-join-text" required></textarea>
                            <span class="form__error js-validation-error"></span>
                        </label>
                        <button type="submit" class="internship-join__button button">Отправить</button>
                    </form>
                </div>
            </div>

        </div><!-- /.container -->
    </section><!-- /.internship-subscribe -->


    <?php include_once '../partials/page-footer.php'?>


    <div class="modal-overlay">
        <?php include_once '../partials/order-modal.php'?>
        <?php include_once '../partials/thanks-modal.php'?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="../dist/js/internship.js"></script>
</body>
</html>