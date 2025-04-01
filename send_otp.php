<?php
session_start();
if(isset($_POST['mobile'])) {
$_SESSION['otp'] = mt_rand(1000, 9999);

 echo "Success###OTP sent successfully to .".$_SESSION['otp'];
}else {
  // Redirect to index.html if phone number is not submitted
  header("Location: index.html");
}
// $ch = curl_init('https://enterprise.smsgupshup.com/GatewayAPI/rest?userid=2000214809&password=yxrWu*%23T&send_to=9007778419&method=SendMessage&msg=3101 is the OTP to process your request initiated with Grihum Housing Finance Limited (Formerly Poonawalla Housing Finance Limited). Valid for 10 mins. DO NOT share with anyone. - GRIHUM HOUSING FINANCE LIMITED&msg_type=TEXT&auth_scheme=plain&v=1.1&format=text');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// curl_close($ch);

// if ($response) {
//     echo "Success: Able to access the network.";
// } else {
//     echo "Error: Unable to access the network.";
// }



?>
