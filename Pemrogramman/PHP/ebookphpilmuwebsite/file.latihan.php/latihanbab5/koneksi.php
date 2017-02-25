<?php
// Script video tutorial PHP dan MySQL Beginner to Advanced
// by : Loka Dwiartara, ST
// http://www.ilmuwebsite.com
// file koneksi.php

$host = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";

$koneksi = mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);

// if ($pilihdatabase) echo"Berhasil";
// else echo "Gagal Koneksi";
?>