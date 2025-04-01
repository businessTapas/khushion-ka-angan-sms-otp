<?php
 header('Content-Type: application/json');
 /*ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Base files
require "smtp/PHPMailer/src/Exception.php";
require "smtp/PHPMailer/src/PHPMailer.php";
require "smtp/PHPMailer/src/SMTP.php";

//echo smtp_mailer('tapas.saha@srvmedia.com','Test Subject','Hellow World');
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(true);
    try {
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "email.grihumhousing.com";
	$mail->Port = "587"; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->SMTPDebug = 3; 
	$mail->Username = "website.enquiry@grihumhousing.com";
	$mail->Password = "Movingforward@2023";
	$mail->setFrom("website.enquiry@grihumhousing.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->addAddress($to);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    

    $mail->send();
    $result = 'Success';
	
} catch (Exception $e) {
    // handle error.
    $result = "Message could not be sent. Mailer Error";
}    
if($result == 'Success')
{
    $response = array("status" => true, "message" => "OTP generated and stored successfully! email sent.");
}
else
{
    $response = array("status"=>false,"message" => "Error: "  );
}

return json_encode($response);

}
?>