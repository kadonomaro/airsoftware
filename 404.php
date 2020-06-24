<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once 'partials/favicon.php'?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <title>404 - страница не найдена - Airsoftware</title>
    <meta name="description" content="К сожалению запрашиваемая страница не найдена. Пока мы работаем над этой проблемой вы можете посетить другие страницы - Airsoftware">
</head>
<body class="404-page">

    <main class="hero">
        <canvas class="hero__canvas js-404-canvas"></canvas>
        <?php include_once 'partials/page-header.php'?>
        <div class="hero__404">
            <h1 class="hero__title-404">К сожалению запрашиваемая страница не найдена</h1>
            <span class="hero__subtitle-404">Пока мы работаем над этой проблемой вы можете посетить другие страницы</span>
        </div>
    </main><!--hero-->


    <?php include_once 'partials/page-footer.php'?>


    <div class="modal-overlay">
        <?php include_once 'partials/order-modal.php'?>
    </div>


    <script src="dist/js/page404.js"></script>
</body>
</html>