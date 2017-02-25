<?php
/*
nama, jeniskelamin, tanggal, bulan, tahun, alamat
*/
include "koneksi.php";

$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$tanggallahir = $_POST['tahun'].'-'.$_POST['bulan'].'-'.$_POST['tanggal'];
$alamat = $_POST['alamat'];

$insert = "insert into `tbl_mhsiswa` (`nama_mhs`, `jenis_kelamin`, `tgl_lahir`, `alamat`) values 
('$nama', '$jeniskelamin', '$tanggallahir','$alamat');";
$insert_query = mysql_query($insert);

if($insert_query) {
echo "Insert Record Berhasil<br />";
echo "Anda Telah berhasil Menginput data:<br />";
echo $nama,"<br />",$jeniskelamin,"<br />",$tanggallahir,"<br />",$alamat ; }

else
echo "Gagal Insert Record";

?>

