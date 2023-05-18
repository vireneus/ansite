<?php
// Запускаем сессию для работы с переменными сессии
session_start();

// Подключаем файл с настройками подключения к базе данных
require_once 'connect/connect.php';
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Панель администратора</title>
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
			<li><a href="/logout.php">Выход</a></li>
		</ul>
	</nav>

	<div style="text-align:center; padding-top: 100px;">
		<h3>Панель администратора</h3>
	</div>

	<br>


	<?php if (!empty($_SESSION["login"])): ?>

		<h3 style="text-align: center">Добавить новую работу в портфолио:</h3>
		<form action="admin/create.php" method="post" style="margin: 0 25% 0 25%; text-align: center;">
			<input type="text" name="name" placeholder="Название" style="color: black;"><br>
			<input type="text" name="image" placeholder="Ссылка на картинку" style="color: black;"><br>
			<textarea name="description" placeholder="Описание" style="color: black;"></textarea><br>
			<button type="submit">Добавить</button>
		</form>

	<?php else:
		echo '<h4>У вас нет доступа к панели администратора!</h4>';
		?>
	<?php endif ?>

	</div>
</body>

</html>