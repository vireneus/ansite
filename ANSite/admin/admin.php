<?php 
// Подключаем файл с настройками подключения к базе данных
require_once '../connect/connect.php';

// Запускаем новую сессию или возобновляем существующую
session_start();

// Получаем логин и пароль из формы авторизации
// Функция htmlspecialchars используется для защиты от внедрения вредоносного кода через специальные символы HTML
$login=htmlspecialchars($_POST["login"]);
$password=htmlspecialchars($_POST["password"]);

// Подготавливаем запрос на выборку пользователя из базы данных по логину и паролю
$sql=$pdo->prepare("SELECT id, login FROM user WHERE login=:login AND password=:password");
$sql->bindParam(':login', $login);
$sql->bindParam(':password', $password);
$sql->execute();

// Вместо использования значений переменных напрямую в SQL-запросе, используются параметры :login и :password.
// Для передачи значений параметров в запрос используются функции bindParam() и execute().
// Таким образом, данный код обеспечивает защиту от SQL-инъекций.

// Получаем результат запроса в виде ассоциативного массива
$array=$sql->fetch(PDO::FETCH_ASSOC);

// Если пользователь найден в базе данных, то сохраняем его логин в сессии и перенаправляем на страницу администратора
if($array["id"]>0) {
    $_SESSION['login']=$array["login"];
    header('Location:/admin.php');
}
// Иначе перенаправляем на страницу авторизации
else {
    header('Location:/login.php');
}
?>
