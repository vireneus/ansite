<?php
// Определяем параметры подключения к базе данных
$user = "root";
$password = "";
$host = "localhost";
$db = "ansite";

// Создаем строку DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=utf8";

// Подключаемся к базе данных с помощью объекта PDO
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    // В случае ошибки выводим сообщение об ошибке и завершаем выполнение скрипта
    die("Не удалось подключиться к базе данных: " . $e->getMessage());
}

// Подключаемся к базе данных с помощью функции mysqli_connect() и сохраняем соединение в переменную $connect
$connect = mysqli_connect($host, $user, $password, $db);
?>