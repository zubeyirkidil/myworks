<?php
	  
	  use PHPMailer\PHPMailer\PHPMailer;
	  use PHPMailer\PHPMailer\Exception;

	
	  
	  require 'Exception.php';
	  require 'PHPMailer.php';
	  require 'SMTP.php';
	  require 'phpmailer.lang-tr.php';
	 
      if(isset($_POST['submit'])){
		  
		  $name = $_POST['name'];
		  $email = $_POST['email'];
		  $message = $_POST['message'];
	 
	  
	  $mail = new PHPMailer();
	  $mail->SetLanguage("tr", "phpmailer/language");
 	  $mail->CharSet  ="utf-8";
      $mail->Encoding="base64";
	  
	  $mail->isSMTP();
	  $mail->SMTPKeepAlive = true;
	  $mail->SMTPAuth = true;
	  $mail->SMTPSecure = 'tls'; // <<<---
	 
	  $mail->Host = "smtp.gmail.com"; // <<<---
	  $mail->Port = 587; // <<<---
		  
	  $mail->Username = "zubeyirkidilsite@gmail.com";
	  $mail->Password = "81yahkid24";
	  
	  $mail->setFrom($email,$name);
	  $mail->addAddress('zubeyirkidil@gmail.com', 'zubeyirkidil@gmail.com');
	  
	  $mail->isHTML(true);
	  $mail->Subject = "zubeyirkidil.com";
	  $mail->Body = 'Ad: '.$name.'<br>'.'E-Mail: '.$email.'<br>'.'Mesaj: '.$message;
		  
	  if($mail->Send()){
		  
		   header("Location: successfullysent.php");
	  }  else{

		    header("Location: failedtosend.php");  
	  }

	  }
	  ?>