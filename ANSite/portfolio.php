<?php require_once 'connect/connect.php'; ?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Портфолио</title>
	<style>
		p.clip {
			white-space: nowrap;
			/* Запрещаем перенос строк */
			overflow: hidden;
			/* Обрезаем все, что не помещается в область */
			padding: 5px;
			/* Поля вокруг текста */
			text-overflow: ellipsis;
			/* Добавляем многоточие */
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

	<?php

	/*
	 * Делаем выборку всех строк из таблицы "cards"
	 */

	$cards = mysqli_query($connect, "SELECT * FROM `cards`");

	/*
	 * Преобразовываем полученные данные в нормальный массив
	 */

	$cards = mysqli_fetch_all($cards);

	/*
	 * Перебираем массив и рендерим HTML с данными из массива
	 * Ключ 0 - id
	 * Ключ 1 - name
	 * Ключ 2 - shortdescription
	 * Ключ 3 - description
	 * Ключ 4 - image
	 */


	?>

	<!-- Portfolio -->
	<div class="wrapper style3">
		<article id="portfolio">
			<div class="container">
				<div class="row">
					<? foreach ($cards as $card): ?>
						<div class="4u 12u(mobile)" data-id="<?= $card[0] ?>">
							<article class="box style2">
								<a href="#" class="image featured"><img src="<?= $card[4] ?>" alt="" /></a>
								<h3><a href="view.php?id=<?= $card[0] ?>"><?= $card[1] ?></a></h3>
								<p class="clip">
									<?= $card[2] ?>
								</p>
							</article>
						</div>
					<? endforeach ?>
				</div>
			</div>
		</article>
	</div>



	<!-- Footer -->
	<div class="wrapper style5">
		<footer>
			<ul id="copyright" style="color: white;">
				<li><a href="login.php"><img src="images/admin_3.png" alt="Панель администратора"></a>tsu@mail.com</li>
				<li>+7-900-000-00-00</a></li>
				<li>Страница создана исключительно для ознакомления в учебных целях</li>
			</ul>

		</footer>
	</div>
</body>

</html>