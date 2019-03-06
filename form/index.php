<? echo 123;
?>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
		<body>
<!-- 			<form method="get" action="get.php">
		Имя <input type="text" name="name" placeholder="Введите ваше имя"/><br/>
		Сообщение <input type="text" name="message" placeholder="Введите ваше сообщение"/><br/>
		<input type="submit"/>
</form>  -->
			<h1>Анкета</h1>
			<form method="post" action="post.php">

					Имя <input type="text" name="name" placeholder="Введите имя" /><br/>
					Фамилия <input type="text" name="surname" placeholder="Введите фамилию" /><br/>
					Введите дату рождения <input type="text" name="birthdate" size="2" />
					<select name="month">
						<option>Января</option>
						<option>Февраля</option>
						<option>Марта</option>
						<option>Апреля</option>
						<option>Мая</option>
						<option>Июня</option>
						<option>Июля</option>
						<option>Августа</option>
						<option>Сентября</option>
						<option>Октября</option>
						<option>Ноября</option>
						<option>Декабря</option>
					</select>
					<input type="text" name="year" size="2" value="20"/>г.<br/>
					Номер телефона
					<input type="tel" name="tel" placeholder="+7(xxx)xxx-xx-xx"/><br/>
					Пол:<br/>
					мужской
					<input type="radio" name="radio" value="m">
					женский
					<input type="radio" name="radio" value="w"><br/>
					Ваши интересы
					<textarea name="message" placeholder="Коротко о себе"></textarea><br/>
					Я даю согласие на обработку персональных данных
					<input type="checkbox" name="flag"><br/>
					<input type="hidden" id="date" value="04.03.2019">
					<input type="submit" onclick="alert(document.getElementById('date').value)" />
			</form>
		</body>
</html>
