<?php

$email = "marinacastroolea20@gmail.com";
$name = $_POST["name"];
$subject = $_POST["subject"];
$message = $_POST["message"];


if (!empty($name) && !empty($subject) && !empty($message)) {
    mail($email, $subject, $message . ". FROM: " . $name);
}
