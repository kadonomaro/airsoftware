<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once 'partials/favicon.php'?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="dist/css/style.css?v=1">
    <title>Airsoftware - современные решения для бизнеса</title>
    <meta name="description" content="Компания Airsoftware – это разработчик программного обеспечения для малого и среднего бизнеса.">
</head>
<body class="main-page">

    <main class="hero">
        <canvas class="hero__canvas js-hero-canvas"></canvas>
        <?php include_once 'partials/page-header.php'?>
        <div class="hero__body">
            <h1 class="hero__title">Airsoftware</h1>
            <span class="hero__subtitle">Современные решения для бизнеса</span>
        </div>

    </main><!-- /.hero-->


    <section class="clients section">
        <header class="section__header">
            <h2 class="section__title">Уже воспользовались нашими продуктами</h2>
            <span class="section__subtitle">Десятки довольных клиентов по всему миру</span>
        </header>

        <div class="clients__slider">
            <div class="clients-slider">
                <div class="clients-slider__wrapper js-clients-slider">
                    <div class="clients-slider__slide">
                        <img class="clients-slider__image" src="dist/assets/image/clients/auto-speed.png" alt="auto speed" >
                        <img class="clients-slider__image" src="dist/assets/image/clients/baby-swim.png" alt="baby swim" >
                    </div>

                    <div class="clients-slider__slide">
                        <img class="clients-slider__image" src="dist/assets/image/clients/beauty-box.png" alt="beauty box" >
                        <img class="clients-slider__image" src="dist/assets/image/clients/fast-banana.png" alt="fast banana" >
                    </div>

                    <div class="clients-slider__slide">
                        <img class="clients-slider__image" src="dist/assets/image/clients/greens-food-suppliers.png" alt="greens food suppliers" >
                        <img class="clients-slider__image" src="dist/assets/image/clients/james-and-sons.png" alt="james and sons" >
                    </div>

                    <div class="clients-slider__slide">
                        <img class="clients-slider__image" src="dist/assets/image/clients/space-cube.png" alt="space cube" >
                        <img class="clients-slider__image" src="dist/assets/image/clients/the-dance-studio.png" alt="the dance studio" >
                    </div>

                    <div class="clients-slider__slide">
                        <img class="clients-slider__image" src="dist/assets/image/clients/the-web-works.png" alt="the web works" >
                        <img class="clients-slider__image" src="dist/assets/image/clients/yoga-baby.png" alt="yoga baby" >
                    </div>
                </div><!--clients-slider__wrapper-->
            </div>
        </div>

        <div class="clients__order">
            <button class="button" data-target="order-modal">Присоединиться</button>
        </div>

    </section><!-- /.clients-->


    <section class="about section">
        <header class="section__header">
            <h2 class="section__title">История успеха</h2>
            <span class="section__subtitle">Мы проделали путь длиною в жизнь</span>
        </header>

        <div class="about__inner">
            <div class="about__side">
                <div class="about__image">
                    <picture>
                        <source type="image/webp" media="(max-width: 450px)" srcset="dist/assets/image/about/company450w.webp">
                        <source media="(max-width: 450px)" srcset="dist/assets/image/about/company450w.jpg">
                        <source type="image/webp" srcset="dist/assets/image/about/company.webp">
                        <img class="about__image-img" src="dist/assets/image/about/company.jpg" alt="офис Airsoftware" >
                    </picture>
                </div>
            </div>
            <div class="about__main">
                <h3 class="about__title">Коротко о компании</h3>
                <div class="about__text">
                    <p>
                        Компания Airsoftware основана в 1998 году Олегом Комаровым и Давидом Денисовым.
                    </p>
                    <p>
                        В данный момент мы занимаем лидирующие позиции на рынке для малого и среднего бизнеса.
                        В нашем штате сотни сотрудников со всего мира, профессионалы с большим опытом работы в сфере разработки программного обеспечения.
                        Мы проделали большой путь и продолжаем расти, чтобы помогать другим людям организовывать свой бизнес.
                    </p>
                </div>
            </div>
        </div><!-- /.about__inner-->

        <div class="about__inner">
            <div class="about__side about__side--ordered">
                <div class="about__image">
                    <picture>
                        <source type="image/webp" media="(max-width: 450px)" srcset="dist/assets/image/about/development450w.webp">
                        <source media="(max-width: 450px)" srcset="dist/assets/image/about/development450w.jpg">
                        <source type="image/webp" srcset="dist/assets/image/about/development.webp">
                        <img class="about__image-img" src="dist/assets/image/about/development.jpg" alt="разработка программного обеспечения" >
                    </picture>
                </div>
            </div>
            <div class="about__main">
                <h3 class="about__title">Основное направление</h3>
                <div class="about__text">
                    <p>
                        Основным направлением нашей деятельности является создание современного, удобного и функционального программного обеспечения.
                        Своей продукцией мы покрываем все возникающие потребности для осуществления непрерывной работы предприятий.
                    </p>
                    <p>
                        Среди наших продуктов есть как полностью бесплатные, но полноценные программы без ограничения функционала,
                        так и их платные аналоги с круглосуточной техподдержкой.
                    </p>
                    <p>Сюда входит:</p>
                    <Ul>
                        <li>Помощь в установке и настройке</li>
                        <li>Онлайн консультант</li>
                        <li>Подробная документация по продуктам</li>
                        <li>Выезд специалиста для устранения проблем</li>
                    </Ul>
                </div>
            </div>
        </div><!-- /.about__inner -->


        <div class="about__inner">
            <div class="about__side">
                <div class="about__image">
                    <picture>
                        <source type="image/webp" media="(max-width: 450px)" srcset="dist/assets/image/about/internship450w.webp">
                        <source media="(max-width: 450px)" srcset="dist/assets/image/about/internship450w.jpg">
                        <source type="image/webp" srcset="dist/assets/image/about/internship.webp">
                        <img class="about__image-img" src="dist/assets/image/about/internship.jpg" alt="ежегодная стажировка" >
                    </picture>
                </div>
            </div>
            <div class="about__main">
                <h3 class="about__title">Рост вместе с нами</h3>
                <div class="about__text">
                    <p>
                        Ежегодно мы проводим стажировки для всех желающих.
                    </p>
                    <p>Требования: </p>
                    <ul>
                        <li>Студент последнего курса по соотвествующему направлению</li>
                        <li>Базовые знания в той сфере, в которой вы хотите стажироваться</li>
                        <li>Проживание в городе проведения стажировки или готовность к переезду</li>
                        <li>Огонь в глазах</li>
                        <li>Тяга к познанию всего неизведанного</li>
                    </ul>
                    <a href="/internship">Подробнее</a>
                </div>
            </div>
        </div><!--about__inner-->

    </section><!-- /.about -->


    <section class="products section">
        <div class="container">
            <header class="section__header">
                <h2 class="section__title section__title--dark">Основные продукты</h2>
                <span class="section__subtitle section__subtitle--dark">Прежде чем выбрать, нужно сравнить</span>
            </header>

            <div class="products__inner">
                <div class="products__tabs">
                    <div class="tabs js-tabs">

                        <div class="tabs__header">
                            <ul class="tabs__list">
                                <li class="tabs__item">
                                    <button class="tabs__button tabs__button--active" data-target="1">Address Book</button>
                                </li>
                                <li class="tabs__item">
                                    <button class="tabs__button" data-target="2">To-do Application</button>
                                </li>
                                <li class="tabs__item">
                                    <button class="tabs__button" data-target="3">Transport Control</button>
                                </li>
                            </ul>
                        </div>

                        <div class="tabs__body">
                            <div class="tabs__content tabs__content--visible" data-content="1">
                                <div class="products-item">
                                <span class="products-item__title">
                                    <a class="products-item__link" href="https://address-book-2020.web.app/" target="_blank" rel="noreferrer">Address Book</a>
                                </span>
                                    <span class="products-item__subtitle">Веб-приложение для управления контактами</span>
                                    <div class="products-item__info">
                                        <div class="table-wrapper">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Наше приложение</td>
                                                    <td>Многие другие приложения</td>
                                                </tr>
                                                <tr>
                                                    <td>Удобный интерфейс</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Высокая производительность</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Большой встроенный функционал</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Бесплатное использование</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--tabs__content-->
                            <div class="tabs__content" data-content="2">
                                <div class="products-item">
                                <span class="products-item__title">
                                    <a class="products-item__link" href="https://kadonomaro.github.io/todo-app/" target="_blank" rel="noreferrer">To-do Application</a>
                                </span>
                                    <span class="products-item__subtitle">Веб-приложение «Список дел»</span>
                                    <div class="products-item__info">
                                        <div class="table-wrapper">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Наше приложение</td>
                                                    <td>Многие другие приложения</td>
                                                </tr>
                                                <tr>
                                                    <td>Удобство использования</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Адаптировано под мобильные устройства</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Подробная документация</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Бесплатное использование</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--tabs__content-->
                            <div class="tabs__content" data-content="3">
                                <div class="products-item">
                                <span class="products-item__title">
                                    <a class="products-item__link" href="" target="_blank">Transport Control</a>
                                </span>
                                    <span class="products-item__subtitle">Система для управления транспортным потоком</span>
                                    <div class="products-item__info">
                                        <div class="table-wrapper">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>Наше приложение</td>
                                                    <td>Многие другие приложения</td>
                                                </tr>
                                                <tr>
                                                    <td>Современный интерфейс</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Интеграция с существующими системами</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Круглосуточная техподдержка</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Доступная цена</td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#check"></use>
                                                        </svg>
                                                    </td>
                                                    <td>
                                                        <svg width="24" height="24">
                                                            <use href="/dist/assets/image/sprite.svg#decline"></use>
                                                        </svg>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--tabs__content-->

                        </div>
                    </div>
                </div>

                <footer class="products__footer">
                    <div class="products__order">
                        <button class="button" data-target="order-modal">Присоединиться</button>
                    </div>
                </footer>
            </div><!-- /.products__inner-->

        </div>
    </section><!-- /.products -->


    <section class="stages section">
        <?php include_once 'php/data/stages.php'?>

            <header class="section__header">
                <h2 class="section__title">Этапы работы</h2>
                <span class="section__subtitle">От нуля до результата</span>
            </header>

            <div class="stages__inner">
                <? foreach($stages as $stage):?>
                    <div class="stages__item">
                        <div class="stage">
                            <h3 class="stage__title"><?=$stage["title"]?></h3>
                            <div class="stage__text"><?=$stage["text"]?></div>
                        </div>
                    </div>
                <? endforeach;?>
            </div>

    </section><!-- ./stages -->

    <?php include_once 'partials/blog.php'?>

    <section class="team section">
        <?php include_once 'php/data/team.php'?>
        <div class="container">
            <header class="section__header">
                <h2 class="section__title">Наша команда</h2>
                <span class="section__subtitle">Поможем воплотить ваши самые смелые желания в реальность</span>
            </header>

            <div class="team__inner">

                <? foreach (array_slice($team, 0, 3) as $department): ?>
                    <div class="team__card">
                        <h3 class="team__title"><?=$department["title"]?></h3>

                        <? foreach ($department as $member): ?>
                            <? if(gettype($member) == 'array'): ?>
                                <article class="team-card">
                                    <div class="team-card__image">
                                        <picture>
                                            <source type="image/webp" srcset="<?=$member["src"]?>.webp">
                                            <img class="team-card__image-img" src="<?=$member["src"]?>.jpg" alt="<?=$member["name"]?>" >
                                        </picture>
                                    </div>
                                    <div class="team-card__text">
                                        <span class="team-card__name"><?=$member["name"]?></span>
                                        <span class="team-card__role"><?=$member["post"]?></span>
                                    </div>
                                </article>
                            <? endif; ?>
                        <? endforeach; ?>
                    </div><!-- /.team__card -->
                <? endforeach; ?>

            </div><!-- /.team__inner -->

        </div><!-- /.container -->
    </section><!-- /.team -->


    <?php include_once 'partials/page-footer.php'?>

    <div class="modal-overlay">
        <?php include_once 'partials/order-modal.php'?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="dist/js/main.js"></script>

</body>
</html>