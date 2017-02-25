<?php
include "koneksi.php";

$id = $_POST['id'];
$tanggal_daftar = date("Y-n-d");
$nama =  $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status =  $_POST['status'];
$sekolah =  $_POST['sekolah'];
$tahun_ajaran = $_POST['tahun_ajaran'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$telepon = $_POST['telepon'];

$query_update = "update tbl_daftar_mahasiswa set nama_pendaftar = '$nama', jns_kelamin = '$jenis_kelamin',
				 status = '$status', lulusan_sekolah = '$sekolah', tahun_ajaran = '$tahun_ajaran', 
				 pekerjaan = '$pekerjaan', alamat = '$alamat', kelurahan = '$kelurahan', kecamatan = '$kecamatan', 
				 kota = '$kota', provinsi = '$provinsi', telp = '$telepon'";



$update = mysql_query($query_update);

if($update)
	{
	echo "Data anda telah berhasil di update ...";
	}

else
	{
	echo "Gagal update ... ";
	}

?>