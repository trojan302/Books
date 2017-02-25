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
			<h1 class="judul">Selamat Datang</h1>
			<small>Anda login sebagai : <strong><?php echo $_SESSION['login'] ;?></strong></small>
			<p>Silahkan manfaatkan fasilitas blog ini, dengan memilih menu di samping ... </p>

			<br class="clearfloat" />
		</div>
		<div id="footer">
			Developed by : ilmuwebsite.com
		</div>
	</div>
	</body>
</html>