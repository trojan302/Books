<?php
$tanggallahir = $_POST['tanggal_lahir'];

if (!ereg ("([0-9]{2})-([0-9]{2})-([0-9]{4})", $tanggallahir, $bagiantanggal))
{
echo "Format yang anda masukkan salah ...";
}

else
{
echo "Tanggal : $bagiantanggal[1]<br />";
echo "Bulan : $bagiantanggal[2]<br />";
echo "Tahun : $bagiantanggal[3]<br />";
}

?>