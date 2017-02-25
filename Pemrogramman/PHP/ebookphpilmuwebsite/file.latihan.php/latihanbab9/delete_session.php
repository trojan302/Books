<?php
session_start();
unset($_SESSION['first']);
echo "Isi '$_SESSION[first]' adalah ... = " . $_SESSION['first'];
// jika ingin memusnahkan semua session yang ada 
// anda dapat menggunakan session_destroy
// biasanya hal ini digunakan ketika proses logout terjadi
// semua session yang ada benar-benar di hapus
// penggunaanya adalah seperti ini 
session_destroy();
echo "<br />Semua session telah di hapus ...";
?>