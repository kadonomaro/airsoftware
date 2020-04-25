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
    <title>Стажировка в Airsoftware</title>
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
                    <div class="internship-team__list">
                        <div class="internship-team__item">
                            <picture>
                                <source type="image/webp" srcset="/dist/assets/image/internship/intern-1.webp">
                                <img class="internship-team__image" src="/dist/assets/image/internship/intern-1.png" alt="Парень стажер" >
                            </picture>
                        </div>
                        <div class="internship-team__item">
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
                        <div class="internship-team__item">
                            <picture>
                                <source type="image/webp" srcset="/dist/assets/image/internship/intern-3.webp">
                                <img class="internship-team__image" src="/dist/assets/image/internship/intern-3.png" alt="Девушка стажер" >
                            </picture>
                        </div>
                        <div class="internship-team__item">
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

</main><!-- ./product-hero -->



    <?php include_once '../partials/page-footer.php'?>


    <div class="modal-overlay">
        <?php include_once '../partials/order-modal.php'?>
    </div>

<script src="../dist/assets/js/main.js"></script>
</body>
</html>