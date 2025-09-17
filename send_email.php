<<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "suyhayalk@gmail.com"; // เปลี่ยนเป็นอีเมลของคุณ
    $subject = "Contact Form: " . $_POST["subject"];
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n\n";
    $message .= "Message:\n" . $_POST["message"];
    $headers = "From: " . $_POST["email"];

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
