<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="style/style.css" rel="stylesheet">
</head>
<body>
<header>
<ul>
	<li><a href="/">Главная</a></li>
	<li><a href="/">Новости</a></li>
	<li><a href="/">Музыка</a></li>
	<li><a href="/">Обратная связь</a></li>
</ul>
</header>
<content>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="username">Введите ваш логин:</label>
	<input type="text" name="username">
	<label for="password">Введите ваш пароль:</label>
	<input type="password" name="password1">
	<label for="password">Введите пароль еще раз:</label>
	<input type="password" name="password2">
	<button type="submit" name="submit">Вход</button>
	</form>
</content>
<footer class="clear">
	<p>Все права защищены</p>
</footer>

</body>

</html>