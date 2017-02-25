<?php
include "koneksi.php";
$id = $_REQUEST['id'];

$detail = "select * from tbl_mhsiswa where id_mhs='$id'";
$detail_query = mysql_query($detail);

while ($hasil = mysql_fetch_array($detail_query))
	{
		$nama = $hasil['nama_mhs'] ; 
		$jenis_kelamin = $hasil['jenis_kelamin'];
		$tanggal_lahir =  $hasil['tgl_lahir'];
		$alamat = $hasil['alamat'];
		
		$data_lengkap = "Nama : ".$nama."<br />";
		$data_lengkap .= "Jenis Kelamin : ".$jenis_kelamin."<br />";
		$data_lengkap .= "Tanggal Lahir : ".$tanggal_lahir."<br />";
		$data_lengkap .= "Alamat : ".$alamat."<br />";
	}
?>

<html>
<head>
<title><?php echo "Informasi $nama"; ?></title>
</head>
<body>
<?php echo "Informasi Detil mengenai <strong>$nama</strong> adalah : <br />".$data_lengkap; ?>
</body>
</html>