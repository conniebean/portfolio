<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "conniejeankennedy@gmail.com";
    $subject = "New contact form submission from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
