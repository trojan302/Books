<?php
$to = "alkemail@gmail.com";
$subject = "Email Contoh";
$message = "Ini adalah email Contoh ... ";
$header = "From: <alk@bytehouse.com>";
// kemudian untuk mengirim email 

mail($to, $subject, $message, $header);
?>
