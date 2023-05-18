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
		</ul>
	</nav>

	<h2 style="text-align:center;padding-top:100px">Вход в панель администратора</h1><br>
		<form action="admin/admin.php" method="post" style="margin: 0 25% 0 25%; text-align: center;">
			<div class="form-group">
				<input type="text" placeholder="Введите логин" name="login" style="color: black;">
			</div><br>
			<div class="form-group">
				<input type="password" placeholder="Введите пароль" name="password" style="color: black;">
			</div><br>
			<button type="submit" class="btn btn-primary">Войти</button>
		</form>

</body>

</html>