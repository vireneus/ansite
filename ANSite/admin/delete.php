<?php

// Подключаем файл с настройками подключения к базе данных
require_once '../connect/connect.php';

// Получаем ID продукта из адресной строки
$id = $_GET['id'];

// Готовим SQL-запрос на удаление записи из таблицы cards по ID
$query = "DELETE FROM `cards` WHERE `cards`.`id` = '$id'";

// Выполняем запрос
mysqli_query($connect, $query);

// Перенаправляем пользователя на страницу администратора
header('Location: /admin.php');
?>