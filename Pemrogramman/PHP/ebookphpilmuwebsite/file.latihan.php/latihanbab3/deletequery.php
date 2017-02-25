<?php
// Script video tutorial PHP dan MySQL Beginner to Advanced
// by : Loka Dwiartara, ST
// http://www.ilmuwebsite.com
// file selectquery1.php

// setiap melakukan query mysql, terlebih dahulu kita koneksikan antara php dan mysq
// dengan cara mengincludekan file koneksinya
include "koneksi.php";

$delete = "delete from tbl_mhsiswa where tgl_lahir = '1986-12-09';";
$delete_query = mysql_query($delete);

if($delete_query) echo "Record Telah berhasil di hapuss...";
else echo "Record Gagal untuk dihapus..";

?>