<?php
include "koneksi.php";

$tampil_nama = "select id_mhs, nama_mhs from tbl_mhsiswa";
$tampil_nama_query = mysql_query($tampil_nama);

while ($hasil = mysql_fetch_array($tampil_nama_query))
	{
		echo "<a href=detaildata.php?id=",$hasil['id_mhs'],">",$hasil['nama_mhs'],"</a><br />";
	}

?>