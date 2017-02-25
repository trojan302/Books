<?php
require_once "function.php";

$nama = $_POST['nama'];
$tanggallahir = $_POST['tanggallahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$website = $_POST['website'];
$username = $_POST['username'];
$password = $_POST['password'];
$passenkrip = md5($password);

$insertprofile = "insert into tbl_user_profile(nama, tgl_lahir, jns_kelamin, status, pekerjaan, alamat, 
										kelurahan , kecamatan , kota, provinsi, telp, email, website)
								values ('$nama', '$tanggallahir', '$jeniskelamin', '$status', '$pekerjaan',
										'$kelurahan','$kecamatan','$kota','$provinsi','$alamat','$telepon',
										'$email', '$website')";

$insertuser = "insert into tbl_user(username, password, level) values('$username', '$passenkrip', '2')";

$insertuser_query = mysql_query($insertuser);
$insertprofile_query = mysql_query($insertprofile);
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
			<h1 class="judul">Registrasi Member :</h1>
			<?php
			if ($insertuser_query && $insertprofile_query)
			{
				echo "<p>Terima Kasih Anda Telah Melakukan Registrasi Member...</p>";
				echo "<p>Berikut adalah informasi login anda...</p>";
				echo "<p>Username : $username<br/>";
				echo "Password : $password<br/></p>";
				echo "<p>Silahkan login di sini <a href=\"login.php\">Login!</a></p>";
			}
			?>
		</div>
		<div id="footer">
			Developed by : ilmuwebsite.com
		</div>
	</div>
	</body>
</html>