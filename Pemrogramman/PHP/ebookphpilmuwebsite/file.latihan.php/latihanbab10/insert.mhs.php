<?php
require_once "function.php";

$nama = $_POST['nama'];
$tanggallahir = $_POST['tanggallahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$status = $_POST['status'];
$lulusansekolah = $_POST['lulusansekolah'];
$tahunajaran = $_POST['tahunajaran'];
$pekerjaan = $_POST['pekerjaan'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$website = $_POST['website'];
$tanggal = date("Y-m-d");

$insertmhs = "insert into tbl_cln_mahasiswa(tanggal_daftar, nama_pendaftar, jns_kelamin, status, 
lulusan_sekolah, tahun_ajaran, tgl_lahir, pekerjaan, alamat, kelurahan, kecamatan, kota, provinsi, telp, email, website)
								values ('$tanggal', '$nama',  '$jeniskelamin', '$status', '$lulusansekolah','$tahunajaran',
'$tanggallahir', '$pekerjaan', '$alamat','$kelurahan','$kecamatan','$kota','$provinsi','$telepon', '$email', '$website')";


$insertmhs_query = mysql_query($insertmhs);
?>

<?php require_once "function.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Administrasi Mahasiswa ... </title>
		<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	</head>
	<body>
		<div id="wrap">
		<div id="header"></div>
			<div id="menu">
				<ul>
					<?php require_once "menu.php"; ?>
				</ul>
			</div>
		<div id="content">
			<h1 class="judul">Pendaftaran Calon Mahasiswa Baru :</h1>
			<?php
			if ($insertmhs_query)
			{
				echo "<p>Terima Kasih Anda Telah Melakukan Pendaftaran Calon Mahasiswa Baru...</p>";
				echo "<p>Berikut adalah data yang anda inputkan...</p>";
				echo "<p>Nama : $nama<br/>";
				echo "Tanggal Lahir : $tanggallahir<br/>";
				echo "Jenis Kelamin : $jeniskelamin<br/>";
				echo "Status : $status<br/>";
				echo "Pekerjaan : $pekerjaan<br/>";
				echo "Kelurahan : $kelurahan<br/>";
				echo "Kecamatan : $kecamatan<br/>";
				echo "Kota : $kota<br/>";
				echo "Provinsi : $provinsi<br/>";
				echo "Alamat : $alamat<br/>";
				echo "Telepon : $telepon<br/>";
				echo "Email : $email<br/>";
				echo "Website : $website<br/></p>";
			}
			?>
		</div>
		<div id="footer">
			Developed by : ilmuwebsite.com
		</div>
	</div>
	</body>
</html>