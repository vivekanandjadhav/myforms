<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Add your email sending logic here
  $to = 'your_email@example.com'; // Replace with your email address
  $subject = 'New Contact Form Submission';
  $headers = "From: $name <$email>";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  // Sending email
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message. Please try again later.";
  }
}
?>
