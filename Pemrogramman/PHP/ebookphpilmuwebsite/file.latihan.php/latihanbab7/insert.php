<?php
if (empty($_POST['nama']))
{
	echo "Anda mengosongkan Nama...";
}

else if (empty($_POST['jenis_kelamin']))
{
	echo "Anda mengosongkan jenis kelamin...";
}

else if (empty($_POST['alamat']))
{
	echo "Anda mengosongkan alamat";
}

else if (empty($_POST['telepon']))
{
	echo "Anda mengosongkan no telepon ... ";
}

else
{
	echo "Semua terisi dan proses input ke database bisa di lakukan disini ... ";
}
?>