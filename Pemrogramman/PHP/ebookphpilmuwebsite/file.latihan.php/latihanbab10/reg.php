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
			<small>Silahkan isi formulir registrasi member...</small>
			<form action="insert.user.php" method="POST">
			<table border="0" width="100%">
			<tr><td>Nama :</td><td><input type="text" name="nama" size="40"></td></tr>
			<tr><td>Tanggal Lahir :</td><td><input type="text" name="tanggallahir" size="25"></td></tr>
			<tr><td>Jenis Kelamin :</td><td><select name="jeniskelamin">
			<option value="laki-laki">Laki-laki</option>
			<option value="perempuan">Perempuan</option></td></tr>
			<tr><td>Status :</td><td><select name="status">
			<option value="Belum Kawin">Belum Kawin</option>
			<option value="Kawin">Sudah Kawin</option>
			<option value="Cerai">Cerai</option>
			</select></td></tr>
			<tr><td>Pekerjaan :</td><td><input type="text" name="pekerjaan" size="35"></td></tr>
			<tr><td>Kelurahan :</td><td><input type="text" name="kelurahan" size="35"></td></tr>
			<tr><td>Kecamatan :</td><td><input type="text" name="kecamatan" size="35"></td></tr>
			<tr><td>Kota :</td><td><input type="text" name="kota" size="35"></td></tr>
			<tr><td>Provinsi :</td><td><input type="text" name="provinsi" size="35"></td></tr>
			<tr><td>Alamat :</td><td><textarea cols="50" rows="6" name="alamat"></textarea></td></tr>
			<tr><td>Telepon :</td><td><input type="text" name="telepon" size="35"></td></tr>
			<tr><td>Email :</td><td><input type="text" name="email" size="35"></td></tr>
			<tr><td>Website :</td><td><input type="text" name="website" size="35"></td></tr>
			<tr><td>Username :</td><td><input type="text" name="username" size="28"></td></tr>
			<tr><td>Password :</td><td><input type="password" name="password" size="28"></td></tr>
			<tr><td></td><td><input type="submit" name="submit" value="Sign Up!"></td></tr>
			</table>
			</form>
			<br class="clearfloat" />
		</div>
		<div id="footer">
			Developed by : ilmuwebsite.com
		</div>
	</div>
	</body>
</html>