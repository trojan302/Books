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
								
			if ($_REQUEST['page'] == "daftar-mahasiswa")
				{
					$daftar = "select * from tbl_mhsiswa order by id_mahasiswa DESC";
					$daftarquery = mysql_query($daftar);
					
					echo "<h1 class='judul'>Daftar Mahasiswa :</h2></p>";
					echo "<table class='daftarberita'>
					<tr><th >Nama</th><th>NIM</th><th>Jurusan</th>
					<th width='30%'>Alamat</th><th>Telepon</th>
					</tr>";
					
					while($mahasiswa = mysql_fetch_array($daftarquery))
					{
						$nama = $mahasiswa['nama_mahasiswa'];
						$id = $mahasiswa['id_mahasiswa'];
						$jurusan = $mahasiswa['jurusan'];
						$nim = $mahasiswa['nim'];
						$alamat = $mahasiswa['alamat'];
						$telepon = $mahasiswa['telp'];
						echo"<tr><td>$nama</td><td>$nim</td><td>$jurusan</td>
						<td>$alamat</td><td>$telepon</td>
						";
					}
					echo "</table>";
				}	
			
			else
				{
					$daftarnilai = "Select tbl_mhsiswa.nama_mahasiswa,
								  tbl_nilai_mahasiswa.*,
								  tbl_mhsiswa.jurusan           
								From tbl_mhsiswa Inner Join
								  tbl_nilai_mahasiswa On tbl_nilai_mahasiswa.nim = tbl_mhsiswa.nim   
									where tbl_nilai_mahasiswa.nim = tbl_mhsiswa.nim";
					$daftarnilaiquery = mysql_query($daftarnilai);
					
					echo "<h1 class='judul'>Daftar Nilai :</h2></p>";
					echo "<table class='daftarberita'>
					<tr><th >Nama</th><th >Jurusan</th><th>Mata Kuliah</th><th>Nilai</th><th>Dosen</th>
					</tr>";
					
					while ($nilai = mysql_fetch_array($daftarnilaiquery))
					{		
					$nama = $nilai['nama_mahasiswa'];
					$nilaitugas = $nilai['nilai_mahasiswa'];
					$kuliah = $nilai['mata_kuliah'];
					$dosen = $nilai['dosen_mata_kuliah'];
					$jurusan =  $nilai['jurusan'];
					
					echo "<tr><td>$nama</td><td>$jurusan</td><td>$kuliah</td><td>$nilaitugas</td><td>$dosen</td></tr>";
					}
					echo "</table>";
				}
			
			
			?>
		</div>
		<div id="footer">
			Developed by : ilmuwebsite.com
		</div>
	</div>
	</body>
</html>