
<?php

include "koneksi.php";

$select = "select * from tbl_daftar_mahasiswa order by id_daftar desc";
$select_query = mysql_query($select);

?>

<html>
<head>
<title>Latihan BAB 6 - Select Record</title>
</head>
<body>

<table style="font-size:11px;font-family:'arial';text-align:center;" border='1' width="80%" align='center' >
<caption><h1>Daftar Calon Mahasiswa Baru</h1></caption>
<tr><th>No</th><th>Tanggal</th><th>Nama</th><th>Jenis Kelamin</th><th>Status</th><th>Lulusan</th><th>Tahun</th>
<th>Pekerjaan</th><th>Alamat</th><th>Kelurahan</th><th>Kecamatan</th><th>Kota</th><th>Provinsi</th><th>Telepon</th>
<th>Action</th></tr>

<?php

while($select_result = mysql_fetch_array($select_query))
{

$id = $select_result['id_daftar'] ;
$tanggaldaftar = $select_result['tanggal_daftar'] ;
$nama = $select_result['nama_pendaftar'] ;
$jeniskelamin = $select_result['jns_kelamin'] ;
$status = $select_result['status'] ;
$lulusan = $select_result['lulusan_sekolah'] ;
$tahunajaran = $select_result['tahun_ajaran'] ;
$pekerjaan = $select_result['pekerjaan'] ;
$alamat = $select_result['alamat'] ;
$kelurahan = $select_result['kelurahan'] ;
$kecamatan = $select_result['kecamatan'] ;
$kota = $select_result['kota'] ;
$provinsi = $select_result['provinsi'] ;
$telepon = $select_result['telp'] ;


echo "<tr><td>$id</td><td>$tanggaldaftar</td><td>$nama</td><td>$jeniskelamin</td><td>$status</td><td>$lulusan</td>
<td>$tahunajaran</td><td>$pekerjaan</td><td>$alamat</td><td>$kelurahan</td><td>$kecamatan</td><td>$kota</td>
<td>$provinsi</td><td>$telepon</td>
<td>
<form method=\"POST\" action=\"action.php?id=$id\"><input type=\"hidden\" value=\"$id\" name=\"id\">
<input type=\"submit\" name=\"action\" value=\"Update\"><br />
<input type=\"submit\" name=\"action\" value=\"Delete\">
</form>
</td>
</tr>";
}

?>

</table>
</body>
</html>