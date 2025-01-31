<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $to = "billypays.app@gmail.com";
    $subject = "New Email Signup";
    $message = "New user signed up: " . $email;
    $headers = "From: no-reply@billypays.com\r\nReply-To: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>