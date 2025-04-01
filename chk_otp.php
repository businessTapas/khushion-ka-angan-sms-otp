<?php
session_start();



if(isset($_POST['otp']) && isset($_POST['type']) && $_POST['type']=='contact_us_otp_check') {
    // Retrieve phone number from form submission
    
    if($_SESSION['otp'] == $_POST['otp']){
        echo "Success###OTP checked successfully "; 
    } else {
        echo "Failed2###Error:WRONG OTP "; 
  
    }
  
    
  } else {
    // Redirect to index.html if phone number is not submitted
    header("Location: index.php");
  }
?>
