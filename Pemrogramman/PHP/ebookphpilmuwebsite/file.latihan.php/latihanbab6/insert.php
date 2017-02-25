<?php
include "koneksi.php";

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

$query_insert = "insert into tbl_daftar_mahasiswa(tanggal_daftar, nama_pendaftar, jns_kelamin, status, lulusan_sekolah,
												   tahun_ajaran, pekerjaan, alamat, kelurahan, kecamatan, kota, provinsi, telp)
												   values('$tanggal_daftar', '$nama', '$jenis_kelamin', '$status', '$sekolah',
												   '$tahun_ajaran', '$pekerjaan', '$alamat', '$kelurahan','$kecamatan', '$kota',
													'$provinsi','$telepon');";

$insert = mysql_query($query_insert);

if($insert)
	{
	echo "Data anda telah berhasil di input ke dalam database ...";
	}

else
	{
	echo "Gagal insert database ... ";
	}

?>