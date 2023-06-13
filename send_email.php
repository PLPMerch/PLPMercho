<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "hernandezkj29@gmail.com";
    $subject = "New message from PLP Merch Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    $sent = mail($to, $subject, $body);

    if ($sent) {
        echo "<h3>Email sent!</h3>";
    } else {
        echo "<h3>Oops! Something went wrong. Please try again later.</h3>";
    }
}
?>
