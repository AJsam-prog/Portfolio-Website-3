<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    // Validate form data (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle empty fields
        echo "Please fill in all required fields.";
        exit;
    }

    // Prepare email message
    $to = "iamajsam@gmail.com"; // Your email address
    $subject = "New message from contact form";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        echo "Message sent successfully!";
    } else {
        // Error sending email
        echo "Error sending message. Please try again later.";
    }
} else {
    // Handle non-POST requests
    echo "Invalid request method.";
}
?>
