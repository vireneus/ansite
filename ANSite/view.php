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

<!DOCTYPE HTML>
<html>

<head>
    <title>Просмотр работы</title>
    <style>
        /* Стили для центрирования контента и задания ширины блока */
        .article {
            width: 70%;
            margin: 2% auto 0;
        }

        /* Стили для картинки */
        .article-image {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        /* Стили для основного теста */
        .article-text {
            text-align: center;
            color: black;
        }

        /* Стили для дополнительного текста или видеоматериала */
        .article-additional {
            text-align: justify;
            margin-top: 20px;
            color: black;
        }

        /* Стили для центрирования элемента */
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            /* соотношение сторон 16:9 */
            height: 0;
            margin-bottom: 20px;
        }

        /* Стили для iframe-элемента */
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

    <!-- Nav -->
    <nav id="nav">
        <ul class="container">
            <li><a href="index.html">Главная</a></li>
            <li><a href="portfolio.php">Портфолио</a></li>
            <li><a href="contact.html">Связь со мной</a></li>
        </ul>
    </nav>

    <header style="height: 30px; background-color: gray;"></header>
    <div class="article">
        <h1 style="text-align: center;">
            <?= $card['name'] ?>
        </h1>
        <!-- <img src="<?= $card['image'] ?>" alt="Изображение" class="article-image"> -->
        <p class="article-text">
            <?= $card['description'] ?>
        </p>
        <div class="article-additional">
            <p>
                <?php

                /*
                 * Перебираем массив с комментариями и выводим
                 */

                foreach ($comments as $comment) {
                    ?>

                    <?= $comment[2] ?>

                    <?php
                }
                ?>
            </p>
        </div>
    </div>

</body>

</html>