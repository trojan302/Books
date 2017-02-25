<?php
// jangan lupa untuk memasukkan fungsi session_start setiap akan meregistrasi atau mengakses session
session_start();
// kita coba akses variable session yang telah di set
echo "isi dari session yang aktif => '<strong>".$_SESSION['first']."</strong>'";
unset($_SESSION['variablenya']);
?>