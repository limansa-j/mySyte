<? header('Content-Type: text/html; charset=utf-8'); 
	$name = $_POST['name'];
	$message = $_POST['message'];
	echo 'Имя: ' . $name . '<br/>';
	echo 'Сообщение: ' . $message . '<br/>';
	print mail("limansa@yandex.ru","header", "$name1\n $message1", 'From: limansa1997@gmail.com');
?>