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

	<div style="text-align:center; padding-top: 100px;">
		<h3>Панель администратора</h3>
	</div>

	<div style="text-align:center">
		<?php if (!empty($_SESSION["login"])): ?>
			<?php echo "Добрый день, " . $_SESSION['login'];
			echo "!"; ?>
			<p>Обязательно <a href="/logout.php">выйдите</a> из аккаунта, после того как закончите!&#128578;</p>

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
			<div class="wrapper style3" style="padding-top: 20px">
				<div style="text-align:center;">
					<h3>Редактирование портфолио:</h3>
				</div>
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
										<p><button><a href="update.php?id=<?= $card[0] ?>"
													style="color: white; text-decoration: none;">Изменить</a></button></p>
										<p><button><a href="admin/delete.php?id=<?= $card[0] ?>"
													style="color: white; text-decoration: none;">Удалить</a></button></p>
									</article>
								</div>
							<? endforeach ?>
							<div class="4u 12u(mobile)" data-id="">
								<article class="box style2">
									<form action="create.php">
										<button>Добавить работу в портфолио</button>
									</form>
								</article>
							</div>
						</div>
					</div>
				</article>
			</div>


		<?php else:
			echo '<h4">У вас нет доступа к панели администратора!</h4>';
			?>
		<?php endif ?>
	</div>
</body>

</html>