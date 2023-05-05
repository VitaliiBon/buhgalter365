
<?php
$to = "bondarenkovetal5@gmail.com";//Почтовый ящик на который будет отправленно сообщение
  $subject = "Тема сообщения";//Тема сообщения
  $message = "Message, сообщение!";//Сообщение, письмо
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";//Шапка сообщения, содержит определение типа письма, от кого, и кому отправить ответ на письмо
// Проверяем или метод запроса POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Поочередно проверяем или были переданные параметры формы, или они не пустые
		if(isset($_POST["username"]){
			//Если параметр есть, присваеваем ему переданое значение
			$name 		=trim(strip_tags($_POST["username"]));
		}
		if(isset($_POST["usernumber"]))
		{
			$number 	= trim(strip_tags($_POST["usernumber"]));
		}
		if (isset( $_POST["question"])) {
			$question 	= trim(strip_tags($question));
		}
			// Формируем письмо
			$message  = "<html>";
				$message  .= "<body>";
				$message  .= "Телефон: ".$number;
				$message  .= "<br />";
				$message  .= "Имя: ".$name;
				$message  .= "<br />";
				$message  .= "Вопрос: ".$question;
				$message  .= "</body>";
			$message  .= "</html>";
			// Окончание формирования тела письма
			// Посылаем письмо
			mail ($to, $subject, $message, $headers);
}
else
{
	exit;
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо! Мы свяжемся с вами!</h1>
</body>
</html>
