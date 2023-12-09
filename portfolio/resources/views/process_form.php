<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sabaabdullah416@gmail.com"; // Replace with your email address
    $subject = $_POST["subject"];
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Subject: " . $subject . "\n\n";
    $message .= "Message:\n" . $_POST["message"];

    $headers = "From: " . $_POST["email"] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>