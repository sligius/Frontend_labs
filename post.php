<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["user_name"];
    $userEmail = $_POST["user_email"];
    $userOffer = $_POST["user_offer"];

    $to = "asvapake@gmail.com";
    $subject = "Новое предложение от пользователя";
    $message .= $userOffer;

    if (mail($to, $subject, $message)) {
        echo "Ваше предложение отправлено.";
    } else {
        echo "Ошибка при отправке предложения.";
    }
}
?>