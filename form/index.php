<? echo 123;
?>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
		<body>
			<form method="get" action="get.php">
					Имя <input type="text" name="name" placeholder="Введите ваше имя"/><br/>
					Сообщение <input type="text" name="message" placeholder="Введите ваше сообщение"/><br/>
					<input type="submit"/>
			</form> 

			<form method="post" action="post.php">

					Имя <input type="text" name="name" placeholder="Введите ваше имя" /><br/>
					Сообщение <textarea name="message" placeholder="Введите ваше сообщение"></textarea><br/>
					<input type="checkbox" name="flag">
					<input type="checkbox" name="flag">
					<input type="checkbox" name="flag">
					<input type="checkbox" name="flag">
					<input type="checkbox" name="flag"><br/>
					<input type="radio" name="radio">
					<input type="radio" name="radio">
					<input type="radio" name="radio">
					<input type="radio" name="radio"><br/>
					<input type="hidden" id="date" value="04.03.2019">
					<input type="submit" onclick="alert(document.getElementById('date').value)" />
			</form>
		</body>
</html>
