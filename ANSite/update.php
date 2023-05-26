<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'connect/connect.php';

/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */

$card_id = $_GET['id'];

/*
 * Делаем выборку строки с полученным ID выше
 */

$card = mysqli_query($connect, "SELECT * FROM `cards` WHERE `id` = '$card_id'");

/*
 * Преобразовывем полученные данные в нормальный массив
 * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
 */

$card = mysqli_fetch_assoc($card);

/*
 * Делаем выборку всех строк комментариев с полученным ID продукта выше
 */

$comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `card_id` = '$card_id'");

/*
 * Преобразовывем полученные данные в нормальный массив
 */

$comments = mysqli_fetch_all($comments);
?>

<?php session_start(); ?>
<?php require_once 'connect/connect.php'; ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Панель администратора</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

    <style>
        .nicEdit-selectContain {
            line-height: initial;
        }
    </style>

    <!-- Nav -->
    <nav id="nav">
        <ul class="container">
            <li><a href="index.html">Главная</a></li>
            <li><a href="portfolio.php">Портфолио</a></li>
            <li><a href="contact.html">Связь со мной</a></li>
        </ul>
    </nav>

    <div style="text-align:center; padding-top: 100px;">
        <h3>Панель администратора</h3>
    </div>

    <br>

    <?php if (!empty($_SESSION["login"])): ?>
        <script src="nicEdit.js" type="text/javascript"></script>
        <script type="text/javascript">bkLib.onDomLoaded(function () { nicEditors.allTextAreas() });</script>
        <h3 style="text-align: center">Изменить работу в портфолио:</h3>
        <form action="admin/update.php" method="post" style="margin: 0 25% 0 25%; text-align: center;">
            <input type="hidden" name="id" value="<?= $card['id'] ?>">
            <input type="text" name="name" placeholder="Новое название" style="color: black;"
                value="<?= $card['name'] ?>"><br>
            <input type="text" name="image" placeholder="Новая ссылка на картинку" style="color: black;"
                value="<?= $card['image'] ?>"><br>
            <input type="text" name="shortdescription" placeholder="Новое краткое описание" style="color: black;"
                value="<?= $card['shortdescription'] ?>"><br>
            <textarea name="description" placeholder="Новое описание"
                style="color: black;"><?= $card['description'] ?></textarea><br>
            <textarea name="body" placeholder="Изменить комментарий"
                style="color: black;"><?php foreach ($comments as $comment) { ?><?= $comment[2] ?><?php } ?></textarea><br>
            <button type="submit">Изменить</button>
        </form>

    <?php else:
        echo '<h4>У вас нет доступа к панели администратора!</h4>';
        ?>
    <?php endif ?>
</body>

</html>