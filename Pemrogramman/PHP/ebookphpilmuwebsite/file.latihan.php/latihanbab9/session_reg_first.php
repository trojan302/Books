<?php
session_start(); 
$_SESSION['first'] = "saya adalah session";
echo "Anda telah meregistrasikan session berisi '<strong>". $_SESSION['first'] . "</strong>'";
?>
<br />
<a href="other_page.php">klik di sini untuk pindah halaman</a>
