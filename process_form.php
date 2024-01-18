<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Add more fields as needed

    // Prepare the email content
    $subject = "New Contact Form Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    // Add more fields as needed

    // Replace 'your-email@example.com' with your actual email address
    $to = "naraharisetti.yashaswi@gmail.com";

    // Send the email
    mail($to, $subject, $message);

    // Redirect after submission (optional)
    header("Location: test.html");
    exit();
}
?>