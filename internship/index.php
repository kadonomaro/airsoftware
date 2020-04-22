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
<?php include_once '../partials/page-header.php'?>





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