<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

require_once("../../connectionclass.php");
echo $email_id = $_POST['username'];
//echo $email_id;
$obj = new connectionclass();
$qry = "select count(*) from login where username='$email_id' and status='active'";
//echo $qry;
$count = $obj->GetSingleData($qry);
if ($count == 0) {
    echo $obj->alert("Email ID does not exist", "../forgot_password.php");
} else {
    session_start();
    $_SESSION['email_id'] = $email_id;
    $random = rand(999999, 888888);

    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'igomen640@gmail.com'; // Your email address
        $mail->Password   = 'dgwm haxq tvga rpqp'; // Your email password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption
        $mail->Port       = 587; // TCP port to connect to

        // Recipient email address
        $email = $email_id;

        // Message settings
        $mail->setFrom('igomen640@gmail.com', 'Ewaste');
        $mail->addAddress($email);
        $mail->Subject = 'Your OTP';
        $mail->Body    = 'Your OTP is: ' . $random; // Fix: Concatenate the string with $random

        // Send the email
        $mail->send();
        echo "OTP sent successfully to $email";
    } catch (Exception $e) {
        echo "Failed to send OTP. Error: {$mail->ErrorInfo}";
    }

    $_SESSION['random'] = $random;
    $qry3 = "insert into forgotpassword(email_id,random_number)values('$email_id','$random')";
    //echo $qry3;
    $result1 = $obj->Manipulation($qry3);
    if ($result1['status'] == "true") {

        //require_once("phpmailer/gmail.php");
        //$mail_code="Note your random number : ".$random;
        //sendmail($mail_code,"FORGOT PASSWORD",$email_id);
        echo $obj->alert("Please check your email for the OTP", "../entercode.php");
    } else {
        echo "Error: Could not create table";
    }
}
?>
