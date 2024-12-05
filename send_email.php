<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your_email@example.com"; // Replace with your email
    $subject = "New Form Submission";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $body = "You have received a new message from $name ($email):\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
