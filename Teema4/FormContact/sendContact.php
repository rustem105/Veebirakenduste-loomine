<?php
session_start();

if(isset($_POST['send'])){
	$errorString='';

	$name=$_POST['name'];
	$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
	$message=$_POST['message'];

	if(trim($name)==''){
		$errorString.='Имя пользователя не введено<br>';
	}
	if(!$email){
		$errorString.='Неправильный емайл адрес<br>';
	}
	if(trim($message)==''){
		$errorString.='Текст сообщение не введен<br>';
	}
	if($errorString==''){
		$sitemail='sitemail@firma.ee';
		$subject='Message from site - contact form';

		$comment="
		<i>Contact form from site</i><hr>
		Hello!<br>
		Your name: $name<br>
		Your email: $email<br>
		Message:<br> $message
		<hr>
		Сообщение отправлено на почту фирмы и ваш е-майл: $email<br>
		----------End message---------
		";
		mail($sitemail,$subject,$comment);
		mail($email,$subject,$comment);

		$_SESSION['comment']=$comment;

	}

	elseif($errorString!=''){
		$_SESSION['error']=$errorString;
	}

	header('Location:contactAnswer.php');

}
else{
	header('Location: contactForm.php');
}

?>