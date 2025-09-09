<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $mesaj = $_POST['mesaj'];

  // Construct email message
  $to = 'contact@andreisandu.net';
  $subject = 'Contact Form Submission';
  $message = "Nume: $nume\nPrenume: $prenume\n\n$mesaj";
  $headers = "From: $nume $prenume <$to>";

  // Send email
  if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
  } else {
    echo 'Failed to send email.';
  }
}

