<?php
    // Получаем данные из формы
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $text = $_POST['message'];

    // Формируем текст сообщения
    $message = "Имя: $name \nТема письма: $subject \nТекст сообщения: $text";

    // Формируем заголовки для отправки письма
    $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain; charset=utf-8\r\n";

    // Отправляем письмо и сохраняем результат выполнения в переменную $success
    $success = mail("opnexru@gmail.com", $subject, $message, $headers);
    
    // Возвращаем результат выполнения в виде строки
    echo $success;
?>
