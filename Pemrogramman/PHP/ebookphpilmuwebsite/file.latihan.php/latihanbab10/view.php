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
				<?php require_once "menu.php"; ?>
			</div>
		<div id="content">
			<?php
			$artikel = "select * from tbl_artikel where id_artikel = $_GET[postid]";
			$artikel_query = mysql_query($artikel);
			while ($post = mysql_fetch_array($artikel_query))
			{
			$id = $post['id_artikel'];
			$tanggalpublish = $post['tanggal_publish'];
			$penulis = $post['penulis'];
			$judulberita = $post['judul_berita']; 
			$isiberita = nl2br($post['isi_berita']);
			$status = $post['status'];
			?>
			<div class="artikel">
				<h1 class="judul"><a href="view.php?postid=<?php echo $id;?>"><?php echo $judulberita; ?></a></h1>
				<small class="tanggal"><?php echo $tanggalpublish; ?></small>
				<small>Oleh : <?php echo $penulis; ?></small>
				<p><?php echo $isiberita; ?></p>
			</div>
			
			<div>
			<?php require_once "comment.php"; ?>
			</div>
			
			<?php
			}
			?>
			<br class="clearfloat" />
		</div>
		<div id="footer">
			Developed by : ilmuwebsite.com
		</div>
	</div>
	</body>
</html>