<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];

    if (isset($_POST['company'])) {
        $company = $_POST['company'];
    }

    $email = $_POST['email'];
    $number = $_POST['number'];

    if (isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }

    $message = $_POST['message'];

    require_once "vendor/PHPMailer/PHPMailer.php";
    require_once "vendor/PHPMailer/SMTP.php";
    require_once "vendor/PHPMailer/Exception.php";

    $mail = new PHPMailer();

    // SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "santo35702@gmail.com";
    $mail->Password = "Santo 35702@6861";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    // Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("santo35702@gmail.com");
    $mail->Subject = "$subject";
    $mail->Body = "Hi My name is: $name.<br/>Company Name: $company.<br/>Phone Number: $number.<br/>Subject: $subject.<br/>Message: $message";

    if ($mail->send()) {
        $status = "success";
        $response = "Your Email has been Sent Successfully...!!";
    } else {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));

}
 ?>
