<?php
$name = $_POST['visit-name'];
$phone = $_POST['visit-phone'];
$purpose = $_POST['visit-purpose'];
$date = $_POST['visit-date'];

$subject = 'Визит в офис - ' . $name . ' - ' . $date;
$message = "$name хочет посетить офис. \n
            Дата визита - $date \n
            Цель визита: $purpose \n
            Номер телефона: $phone";
$destination_email = 'info@airsoftware.ru.com';



mail($destination_email, $subject, $message, 'Content-type: text/html; charset=utf-8');