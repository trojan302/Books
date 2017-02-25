<?php
require_once "function.php";
if(ISSET($_POST['kirim']))
	{
	$tanggal = date("Y-m-d");
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$status = "publish";
	$isi = $_POST['komentar'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	
	$insert = "insert into tbl_komentar(id_berita_kampus, tanggal_komentar, nama, status, isi_komentar, email, website) 
			   values('$id', '$tanggal', '$nama', '$status', '$isi','$email','$website')";
	mysql_query($insert);
	echo "<meta http-equiv='refresh' content='1;url=view.php?postid=$_GET[postid]#komentar'>";
	}

$select = "select * from tbl_komentar where status='publish' and id_berita_kampus = '$id'";
$selectquery = mysql_query($select);

echo "<h1 class='judul'>Komentar</h1>";
		
while($isikomentar = mysql_fetch_array($selectquery))
	{
		$nama = $isikomentar['nama'];
		$isi = $isikomentar['isi_komentar'];
		$email = $isikomentar['email'];
		$website = $isikomentar['website'];
		

		echo "<div class='komentar'>";
		echo "<p>$nama | $email | $website</p>";
		echo "<p>Komentar: $isi</p>";
		echo "</div>";
	}
?>


<form action="view.php?postid=<?php echo $_REQUEST['postid']; ?>" method="POST">
<p><a name="komentar">Nama :</a></p>
<input type="text" name="nama" size="25"/>
<p>Email :</p>
<input type="text" name="email" size="25"/>
<p>Website :</p>
<input type="text" name="website" size="25"/>
<p>Komentar :</p>
<textarea name="komentar" cols="67" rows="10"></textarea>
<input type="hidden" name="id" value="<?php echo $_REQUEST['postid']; ?>"/>
<input type="submit" name="kirim" value="Kirim!"/>
</form>