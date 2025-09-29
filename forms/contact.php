<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "maulanaakbarr101@gmail.com"; // Email tujuan
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  $fullMessage = "Nama: $name\n";
  $fullMessage .= "Email: $email\n\n";
  $fullMessage .= "Pesan:\n$message\n";

  if (mail($to, $subject, $fullMessage, $headers)) {
    echo "Pesan berhasil dikirim!";
  } else {
    echo "Gagal mengirim pesan.";
  }
}
?>
