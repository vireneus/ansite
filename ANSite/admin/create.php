<?php

// Подключаем файл с настройками подключения к базе данных
require_once '../connect/connect.php';

// Получаем данные из формы
$name = $_POST['name'];
$image = $_POST['image'];
$shortdescription = $_POST['shortdescription'];
$description = $_POST['description'];

// Готовим SQL-запрос на добавление новой записи в таблицу cards
$query = "INSERT INTO `cards` (`id`, `name`, `shortdescription`, `description`, `image`) VALUES (NULL, '$name', '$shortdescription', '$description', '$image')";

// Выполняем запрос
mysqli_query($connect, $query);

// Перенаправляем пользователя на страницу администратора
header('Location: /admin.php');
?>