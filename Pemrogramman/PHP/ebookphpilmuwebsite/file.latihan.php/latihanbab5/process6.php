<?php
if ($_POST['kirim'] == "insert")
{
	echo "Proses Insert...<br />";
	echo "Data yang anda masukkan ... :<br />";
	echo "Nama :".$_POST['nama']."<br />";
	echo "Jenis Kelamin:".$_POST['jenis_kelamin']."<br />";
	echo "Alamat:".$_POST['alamat']."<br />";
}

else if ($_POST['kirim'] == "update")
{
	echo "Proses Update...<br />";
	echo "Data yang anda masukkan ... : <br />";
	echo "Nama : ".$_POST['nama']."<br />";
	echo "Jenis Kelamin: ".$_POST['jenis_kelamin']."<br />";
	echo "Alamat: ".$_POST['alamat']."<br />";
}

else 
{
	echo "Tidak ada proses...";
}
?>