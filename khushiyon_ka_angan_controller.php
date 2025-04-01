<?php
session_start();

require_once("connection.php");
require_once("smtpmailer.php");

// Create a global instance of MySQLDatabase
$db = new MySQLDatabase();

// Example usage: executing a query
//$query = "SELECT * FROM users";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field
    $full_name = $_REQUEST['full_name'];
    $email = $_REQUEST['email'];
    // $otp_verified_contact = $_REQUEST['otp_verified_contact'];
    $phoneno = $_REQUEST['phoneno'];
    $otp = $_REQUEST['otp'];
    $loan_no = $_REQUEST['loan_no'];
    $grievance_no = $_REQUEST['grievance_no'];
    $upi_id = $_REQUEST['upi_id'];

    // echo "<pre>";
    // print_r($_REQUEST);
    // die;


    if (empty($full_name)) {
        echo "name is empty";
    } elseif (empty($email)) {
        echo "email is empty";
    }
    // elseif (empty($otp_verified_contact)) {
    //     echo "Otp varified contact number is empty";
    // } 
    // elseif (empty($phoneno)) {
    //     echo "Phone number is empty";
    // } 
    elseif (empty($loan_no)) {
        echo "Loan number is empty";
    } elseif (empty($grievance_no)) {
        echo "Grievance number is empty";
    } elseif (empty($upi_id)) {
        echo "Upi Id is empty";
    } else {

        if (isset($_FILES['cancelled_cheque'])) {
            $filename = $_FILES["cancelled_cheque"]["name"];
            $tempname = $_FILES["cancelled_cheque"]["tmp_name"];
            $imageNameExtension = substr($filename, strrpos($filename, '.') + 1);
            $folder = "./images/upload/" . md5(rand()) . '.' . $imageNameExtension;

            // echo "<pre>";
            // print_r($_FILES['cancelled_cheque']);
            // die;
        }
        if (move_uploaded_file($tempname, $folder)) {
            // echo "Image uploaded successfully!";
            $sql = "INSERT INTO `student_loan`(`full_name`, `email`, `phoneno`, `loan_no`, `grievance_no`, `cancelled_cheque`, `upi_id`) VALUES ('{$full_name}','{$email}','{$phoneno}','{$loan_no}','{$grievance_no}','{$folder}','{$upi_id}')";
            $result = $db->query($sql);
            $body = '<html><head><title>Test Email</title></head><body><h1>Thank you</h1><table><tr><th>Name:  </th><td>' . $full_name . '</td></tr><tr><th>Loan number:  </th><td>' . $loan_no . '</td></tr><tr><th>Grievance no:  </th><td>' . $grievance_no . '</td></tr><tr><th>Upi Id: </th><td>' . $upi_id . '</td></tr></table></body></html>';
            $json_resString= smtp_mailer($email,'Test Subject',$body);
            $resArray = json_decode($json_resString);
            if($resArray != null){
                $_SESSION['mail_success'] = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                Your application details saved and an email has been sent successfully !!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
                header("Location: index.php");
            } else{
                echo "send mail error";
            }
            die;
        } else {
            echo "Failed to upload image";
        }
    }
}
$result = $db->query($query);


// Close the database connection when done
$db->closeConnection();





?>

