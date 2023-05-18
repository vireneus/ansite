<?php

// Подключаем файл с настройками подключения к базе данных
require_once '../connect/connect.php';

// Получаем данные из формы
$id = $_POST['id'];
$body = $_POST['body'];
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];

// Готовим SQL-запрос на обновление записи в таблице cards по ID
$query = "UPDATE `cards` SET `name` = '$name', `description` = '$description', `image` = '$image' WHERE `cards`.`id` = '$id'";
mysqli_query($connect, $query);

// Проверяем, есть ли у продукта комментарии
$sql = "SELECT count(id) FROM `comments` WHERE card_id = '$id' LIMIT 1";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_row($result);

if ($row[0]>0) {
    // Если комментарии есть, то обновляем их содержимое
    mysqli_query($connect, "UPDATE `comments` SET `body` = '$body' WHERE `comments`.`card_id` = '$id'");
} else {
    // Иначе создаем новый комментарий для данного продукта
    mysqli_query($connect, "INSERT INTO `comments` (`id`, `card_id`, `body`) VALUES (NULL, '$id', '$body')");
}

// Перенаправляем пользователя на страницу администратора
header('Location: /admin.php');
?>