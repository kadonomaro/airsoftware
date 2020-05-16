<?php
$product = $_POST['order-product'];
$name = $_POST['order-name'];
$phone = $_POST['order-phone'];
$email = $_POST['order-email'];

$subject = 'Заказ продукта - ' . $product . ' - ' . $name;
$message = "$name оставил заявку на заказ $product \n
            Номер телефона: $phone \n
            Электронная почта: $email";
$destination_email = 'info@airsoftware.ru.com';



mail($destination_email, $subject, $message, 'Content-type: text/html; charset=utf-8');