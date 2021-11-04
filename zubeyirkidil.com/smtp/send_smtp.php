<?php

class send_smtp
{
    private static function ip(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipexp=explode(',',$ip);
        return $ipexp[0];
    }

    public static function SendMail($subject, $message){
        require __DIR__."/class.phpmailer.php";

        $mail = new PHPMailer();

        $mail->isSMTP();
        //$mail->SMTPDebug=3;
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        if(SMTP_TLS){
            $mail->SMTPSecure = SMTP_TLS;
            $mail->SMTPAutoTLS = SMTP_TLS;
        }
        $mail->Port = SMTP_PORT;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom($mail->Username);
        $mail->addAddress(ALICI_ADRESI);

        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->Body    = $message;

        if(!$mail->send()) {
            
            echo "<script>document.getElementById('feedback').innerHTML='Mesajınız maalesef iletilemedi :('; popup.style.display = 'block'; popup.style.transform = 'translateY(0%)';</script>";
        } else {
            
            echo "<script>document.getElementById('feedback').innerHTML='Mesajınız başarıyla iletildi :)'; popup.style.display = 'block'; popup.style.transform = 'translateY(0%)';</script>";
        }
    
    }


}


