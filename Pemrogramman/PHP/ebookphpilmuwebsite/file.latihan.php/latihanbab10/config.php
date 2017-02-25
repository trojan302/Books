<?php
$url = "http://localhost/vid.tutor" ;
$host = "localhost";
$username = "root";
$password = "";
$database = "admin_mhs";

$connect = mysql_connect($host, $username, $password);
mysql_select_db($database, $connect) or Die("MySQL Gagal Koneksi");
?>