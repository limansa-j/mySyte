<? header('Content-Type: text/html; charset=utf-8'); 
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$date = $_POST['birthdate'];
	$month = $_POST['month'];
	$year = $_POST['year'];	
	$tel = $_POST['tel'];
	$radiobutton = $_POST['radio'];
	$message = $_POST['message'];
	$pol;
	if ($radiobutton=='m')
		{echo $pol="мужской";}
	else echo $pol="женский";
	echo 'Имя: ' . $name . '<br/>';
	echo 'Сообщение: ' . $message . '<br/>';
	echo 'пол ' . $pol . '<br>';
	print mail("limansa@yandex.ru","Анкета", "$name\n $surname\n $date $month $year\n $tel\n $pol\n $message", 'From: limansa1997@gmail.com');
?>