<?php
$name = $_POST['internship-join-name'];
$message = $_POST['internship-join-text'];

$subject = 'Стажировка - ' . $name;
$destination_email = 'info@airsoftware.ru.com';

mail($destination_email, $subject, $message, 'Content-type: text/html; charset=utf-8');