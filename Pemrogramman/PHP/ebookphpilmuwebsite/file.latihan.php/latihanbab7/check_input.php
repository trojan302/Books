<?php
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jenis_kelamin'];
$tanggallahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];


if (is_numeric($nama))
{
	echo "<strong>Nama yang anda masukkan bertipe numeric</strong>, silahkan isi kembali dengan string...<br />";
}

else if (is_string($nama))
{
	echo "<strong>Nama yang anda masukkan bertipe string</strong><br />";
}

else
{
	echo "Anda harus memasukkan nama dalam format string...<br />";
}


if (is_numeric($telepon))
{
	echo "<strong>Nomor Telepon</strong> yang anda masukkan <strong>bertipe numeric</strong><br />";
}

else
{
	echo "Anda harus memasukkan nama dalam format numeric...<br />";
}


?>