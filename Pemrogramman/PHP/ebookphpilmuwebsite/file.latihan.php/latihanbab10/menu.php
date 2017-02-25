<ul>
	<li><a href="<?php echo $url; ?>">Home</a></li>
	<li><a href="<?php echo $url; ?>/reg.mhs.php">Pendaftaran Mahasiswa</a></li>
	<?php if (ISSET($_SESSION['login'])){?>
	<li><a href="<?php echo $url; ?>/list.php?page=daftar-mahasiswa">Daftar Mahasiswa</a></li>
	<li><a href="<?php echo $url; ?>/list.php?page=nilai-mahasiswa">Nilai Mahasiswa</a></li>
<li><a href="<?php echo $url; ?>/logout.php">Logout</a></li>
	<?php } else {?>
	<li><a href="<?php echo $url; ?>/reg.php">Registrasi Member</a></li>
	<li><a href="<?php echo $url; ?>/login.php">Login</a></li>
	<?php } ?>	
</ul>