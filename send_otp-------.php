<?php

session_start();

// Check if phone number is submitted
if(isset($_POST['mobile']) && isset($_POST['type']) && $_POST['type']=='contact_us_otp_send') {
    // Retrieve phone number from form submission
    $phone = $_POST['mobile'];
    $otp = mt_rand(1000, 9999);

    // Store OTP in session
    $_SESSION['otp'] = $otp;

    
    // OTP Configuration
    $userId = '2000214809'; // Your SMS Gupshup User ID
    $password = 'yxrWu*#T'; // Your SMS Gupshup password
    $sendTo = $phone; // The recipient's phone number
    $otpMessage = urlencode('3101 is the OTP to process your request initiated with Grihum Housing Finance Limited (Formerly Poonawalla Housing Finance Limited). Valid for 10 mins. DO NOT share with anyone. - GRIHUM HOUSING FINANCE LIMITED');
    $method = 'SendMessage';
    $msgType = 'TEXT';
    $authScheme = 'plain';
    $version = '1.1';
    $format = 'json';

    // Gateway URL
    $gatewayUrl = "https://enterprise.smsgupshup.com/GatewayAPI/rest?userid=$userId&password=$password&send_to=$sendTo&method=$method&msg=$otpMessage&msg_type=$msgType&auth_scheme=$authScheme&v=$version&format=$format";

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $gatewayUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for errors
    if(curl_errno($ch)) {
        $error = curl_error($ch);
        echo "Failed2###Error: $error";
    } else {
        // Display response from SMS Gupshup API
        echo "Success###OTP sent successfully to $phone.";
    }

    // Close cURL session
    curl_close($ch);
} else {
    // Redirect to index.html if phone number is not submitted
    header("Location: index.html");
}


if(isset($_POST['OTP']) && isset($_POST['type']) && $_POST['type']=='contact_us_otp_check') {
    // Retrieve phone number from form submission
    
    if($_SESSION['otp'] == $_POST['OTP']){
        echo "Success###OTP checked successfully "; 
    } else {
        echo "Failed2###Error:WRONG OTP "; 

    }

    
} else {
    // Redirect to index.html if phone number is not submitted
    header("Location: index.php");
}

?>
