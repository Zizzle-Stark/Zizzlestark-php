<?php
  // Replace 'vigneshg2k01@gmail.com' with your real receiving email address
  $receiving_email_address = 'vigneshg2k01@gmail.com';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message\n";

    // Send the email
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($receiving_email_address, $subject, $email_message, $headers)) {
      echo "Email sent successfully!";
    } else {
      echo "Error sending email.";
    }
  } else {
    echo "Invalid request.";
  }
?>

