<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email parameters
    $to = "afuwapeadewale9@gmail.com";
    $subject = "New Form Submission";
    $body = "First Name: $firstname\nLast Name: $lastname\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to";
    } else {
        echo "Failed to send email.";
    }
}
?>
