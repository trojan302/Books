<?php
// Script video tutorial PHP dan MySQL Beginner to Advanced
// by : Loka Dwiartara, ST
// http://www.ilmuwebsite.com
// file selectquery1.php

include "koneksi.php";

$tampilkan = "select * from tbl_mhsiswa";
$query_tampilkan = mysql_query($tampilkan);

while($hasil = mysql_fetch_array($query_tampilkan))
	{
		echo $hasil['nama_mhs']."<br />";
	}

?>