<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message = htmlspecialchars($_POST["message"]); // Sanitize using htmlspecialchars

    $to = "farahmalik11@gmail.com"; // Your email address
    $headers = "From: $email";
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    // Send the email
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending the message.";
    }
}
?>
