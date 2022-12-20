<?php
  // Získání údajů z formuláře
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Nastavení hlaviček e-mailu
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

  // Odeslání e-mailu
  if (mail('ondrej@eznet.cz', 'Zpráva z formuláře', $message, $headers)) {
    // Úspěšné odeslání
    http_response_code(200);
  } else {
    // Chyba při odesílání
    http_response_code(500);
  }
?>
