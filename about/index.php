<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once '../partials/favicon.php'?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/style.css">
    <title>О компании - Airsoftware</title>
    <meta name="description" content="Компания Airsoftware - это надежный партнер в решении бизнес задач. Информация о компании Airsoftware">
</head>
<body class="company-page">

    <main class="company-hero">
        <div class="company-hero__header">
            <?php include_once '../partials/page-header.php'?>
        </div>
        <div class="company-hero__content">
            <div class="company-hero__text">

                <div class="magic-scroll js-magic-scroll">
                    <div class="magic-scroll__text magic-scroll__text--visible js-magic-scroll-item">
                        Десятки стран, сотни городов, тысячи пользователей по всему миру.
                    </div>
                    <div class="magic-scroll__text js-magic-scroll-item">
                        Налаженные рабочие процессы, довольные заказчики и постоянные надежные партнеры.
                    </div>
                    <div class="magic-scroll__text js-magic-scroll-item">
                        Мы – это команда профессионалов в сфере разработки программного обеспечения для малого и среднего бизнеса.
                    </div>
                    <div class="magic-scroll__text js-magic-scroll-item">
                        Более 20 лет мы создаем продукты, которые помогают решать вам свои проблемы
                    </div>
                    <div class="magic-scroll__text js-magic-scroll-item">
                        освобождают от рутины и дают возможность сосредоточиться на действительно важных вещах.
                    </div>
                </div>

                <div class="magic-scroll__mouse js-magic-scroll-mouse"></div>

            </div>
        </div>
    </main>


    <section class="team section">
        <?php include_once '../php/data/team.php'?>
        <div class="container">
            <header class="section__header">
                <h2 class="section__title">Наша команда</h2>
                <span class="section__subtitle">Вы придумываете – мы воплощаем</span>
            </header>

            <div class="team__inner">

                <? foreach ($team as $department): ?>
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

            <footer class="team__footer">
                <span class="team__resume">И это далеко не все сотрудники.</span>
                <span class="team__resume">Чтобы познакомиться поближе, вы можете посетить наш офис.</span>
            </footer>

        </div><!-- /.container -->
    </section><!-- /.team -->

    <?php include_once '../partials/blog.php'?>

    <section class="company-map section">
        <header class="section__header">
            <h2 class="section__title">Адрес компании</h2>
            <span class="section__subtitle">Вы можете найти нас по этому адресу, мы всегда рады посетителям</span>
        </header>
        <div class="company-map__map js-company-map">
            <script class="js-lazy-map" type="text/javascript" charset="utf-8" async data-src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae1942fa0dd32419e08c7518c9eb1965401f370301bec227b6142b4119011379b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <footer class="company-map__footer">
            <button class="button js-open-modal" data-target="visit-modal">Посетить офис</button>
        </footer>
    </section>


    <?php include_once '../partials/page-footer.php'?>


    <div class="modal-overlay">
        <?php include_once '../partials/order-modal.php'?>
        <?php include_once '../partials/visit-modal.php'?>
    </div>


    <script src="../dist/js/about.js"></script>
</body>
</html>