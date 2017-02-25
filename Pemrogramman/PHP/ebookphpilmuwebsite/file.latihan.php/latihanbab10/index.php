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
			<?php
			$list = "select * from tbl_artikel where status='publish' order by id_artikel ASC ";
			$list_query = mysql_query($list);
			while ($post = mysql_fetch_array($list_query))
			{
			$id = $post['id_artikel'];
			$tanggalpublish = $post['tanggal_publish'];
			$penulis = $post['penulis'];
			$judulberita = $post['judul_berita']; 
			$isiberita = $post['isi_berita'];
			$status = $post['status'];
			?>
			<div class="artikel">
				<h1 class="judul"><a href="view.php?postid=<?php echo $id;?>"><?php echo $judulberita; ?></a></h1>
				<small class="tanggal"><?php echo $tanggalpublish; ?></small>
				<small>Oleh : <?php echo $penulis; ?></small>
				<p><?php echo selengkapnya($isiberita); echo "... <a href=\"view.php?postid=".$id."\"> baca selengkapnya</a>" ?></p>
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