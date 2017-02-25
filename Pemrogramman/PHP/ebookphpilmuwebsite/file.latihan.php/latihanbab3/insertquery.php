<?php
// Script video tutorial PHP dan MySQL Beginner to Advanced
// by : Loka Dwiartara, ST
// http://www.ilmuwebsite.com
// file selectquery1.php

// terlebih dahulu kita includekan file koneksi.php, karena sebelum dapat menjalankan query mysql
// anda harus mengkoneksikan php dengan mysql terlebih dahulu
include "koneksi.php";

// kemudian terlebih dahulu kita buat querynya, seperti yang sudah kita pelajari sebelumnya

$insert = "insert into tbl_mhsiswa(nama_mhs, jenis_kelamin, tgl_lahir, alamat) 
			values('Deny Sarwono', 'Pria', '1986-12-09','Jawa Barat');";

// kemudian jalankan querynya			
$insert_query = mysql_query($insert);

// ketika querynya berhasil dijalankan maka keluarkan komentar "Berhasil di insert";
if($insert_query) echo "Berhasil di insert";

// namun ketika querynya tidak berhasil dijalankan maka keluarkan komentar "Gagan Insert Record";
else echo "Gagal Insert Record";

?>