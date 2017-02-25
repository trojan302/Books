<?php
require_once "function.php";
if (ISSET($_POST['login']))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$login = "select * from tbl_user where username ='$username' and password='$password' and level='1'";
		$loginquery = mysql_query($login);
		$count = mysql_num_rows($loginquery);
		if($count >= 1)
			{
			$_SESSION['username'] = $username;
			header("location: admin.php?page=new");
			}
		else
			{
			header("location: admin.php");
			}
	}
	
else if ($_REQUEST['page'] == "logout")
	{
		session_unset($_SESSION['username']);
		session_destroy();
		header("location: admin.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Administrasi Mahasiswa ... </title>
		<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	</head>
	<body>
			<?php
			if (ISSET($_SESSION['username']))
				{
			?>
		
			<div id="wrap">	
			<div id="headeradmin">welcome back <strong>admin</strong> | <a href="admin.php?page=logout">Logout</a></div>
			<div id="menuadmin">
				<!-- disini mulai -->
				<ul>
				  <li><h2>Berita</h2>
					<ul>
					  <li><a href="admin.php?page=daftar-berita">Daftar Berita</a></li>
					  <li><a href="admin.php?page=buat-berita-baru">Tambah Berita Baru</a></li>
					</ul>
				  </li>
				</ul>

				<ul>

				  <li><h2>Mahasiswa</h2>
					<ul>
					  <li><a href="admin.php?page=daftar-mahasiswa" >Daftar Mahasiswa</a></li>
					  <li><a href="admin.php?page=daftar-calon-mahasiswa-baru" >Daftar Calon Mahasiswa Baru</a></li>
					  <li><a href="admin.php?page=tambah-mahasiswa" >Tambah Mahasiswa</a></li>
					</ul>
				  </li>
				</ul>

				<ul>
				  <li><h2>Nilai Mahasiswa</h2>

					<ul>
					  <li><a href="admin.php?page=daftar-nilai-mahasiswa">Daftar Nilai Mahasiswa</a></li>
					  <li><a href="admin.php?page=tambah-nilai-mahasiswa">Tambah Nilai Mahasiswa</a></li>
					</ul>
				  </li>
				</ul>
				
				<!-- disini mulai -->

			</div><div id="inside">
			<?php
			

					switch($_REQUEST['page'])
						{
							case "buat-berita-baru": 
								if ($_REQUEST['post'] == 'new')
									{
										if (ISSET($_POST['judulberita']))
										{
											$judul = $_POST['judulberita'];
											$penulis = $_POST['penulis'];
											$status = $_POST['status'];
											$isiberita = $_POST['isiberita'];
											$tanggal = date("Y-m-d");
											
											$insert = "insert into tbl_artikel(tanggal_publish, penulis, judul_berita, isi_berita, status)
													values('$tanggal', '$penulis', '$judul', '$isiberita', '$status')";
											
											mysql_query($insert);
											echo "Artikel telah dibuat...";
											echo "<meta http-equiv='refresh' content='2;url=admin.php?page=daftar-berita'>";
										}
									}
								
								else if ($_REQUEST['post'] == 'edit')
									{
										if (ISSET($_POST['judulberita']))
										{		
											$id = $_POST['id'];
											$judul = $_POST['judulberita'];
											$penulis = $_POST['penulis'];
											$status = $_POST['status'];
											$isiberita = $_POST['isiberita'];
											$tanggal = date("Y-m-d");
											
											$update = "update tbl_artikel set tanggal_publish ='$tanggal', penulis = '$penulis', 
											judul_berita = '$judul', isi_berita = '$isiberita', status = '$status' where id_artikel = '$id'";
											
											
											mysql_query($update);
											echo "Artikel telah update...";
											echo "<meta http-equiv='refresh' content='2;url=admin.php?page=daftar-berita'>";	
										}
									}
									
								else
									{
										echo "<h1 class='judul'>Tambah Berita Baru : </h1>";
										echo "<p class='penulis'>Judul Berita : </p>";
										echo "<form action='admin.php?page=buat-berita-baru&post=new' method='post'>";
										echo "<input type='text' size='75' name='judulberita' />";
										echo "<p class='penulis'>Penulis : </p>";
										echo "<input type='text' size='35' name='penulis' />";
										echo "<p class='isiberita'>Status</p>";
										echo "<select name='status'>
											  <option value='publish'>Publish</option>
											  <option value='draft'>Draft</option>
											  <option value='pending'>Pending</option>
											  </select>";
										echo "<p class='isiberita'>Isi Berita : </p>";
										echo "<textarea name='isiberita' cols='107' rows='20'></textarea><br/>";
										echo "<input name='submit' type='submit' value='Submit'";
										echo "</form>";
									}
									break;
								
							case "daftar-berita":
							
								if (ISSET($_POST['delete']))
									{
										$id = $_POST['id'];
										$delete = "delete from tbl_artikel where id_artikel = $id";
										mysql_query($delete);
									}
								
								else if (ISSET($_POST['edit']))
									{
										$id = $_POST['id'];
										$edit = "select * from tbl_artikel where id_artikel =$id";
										$editquery = mysql_query($edit);
										$artikel = mysql_fetch_array($editquery);
										$id = $artikel['id_artikel'];
										$judul = $artikel['judul_berita'];
										$penulis = $artikel['penulis'];
										$berita = $artikel['isi_berita'];
										
										echo "<p class='judul'>Judul Berita : </p>";
										echo "<form action='admin.php?page=buat-berita-baru&post=edit' method='post'>";
										echo "<input type='hidden' name='id' value=\"$id\" />";
										echo "<input type='text' size='75' name='judulberita' value=\"$judul\"/>";
										echo "<p class='penulis'>Penulis : </p>";
										echo "<input type='text' size='35' name='penulis' value=\"$penulis\" />";
										echo "<p class='isiberita'>Status</p>";
										echo "<select name='status'>
											  <option value='publish'>Publish</option>
											  <option value='draft'>Draft</option>
											  <option value='pending'>Pending</option>
											  </select>";
										echo "<p class='isiberita'>Isi Berita : </p>";
										echo "<textarea name='isiberita' cols='107' rows='20'>$berita</textarea><br/>";
										echo "<input name='submit' type='submit' value='Submit'";
										echo "</form>";
									}
									
								else 
									{
										$daftar = "select * from tbl_artikel order by tanggal_publish DESC";	
										$daftarquery = mysql_query($daftar);
															
										echo "<h1 class='judul'>Daftar Berita :</h2></p>";
										echo "<table class='daftarberita'>";
										echo "
										<tr><th width='50%'>Judul Berita</th><th width='20%'>Penulis</th><th width='10%'>Status</th>
										<th width='20%'>Action</th><th></th></tr>";
										
										while ($daftarresult = mysql_fetch_array($daftarquery))
										{
										$id = $daftarresult['id_artikel'];
										$penulis = $daftarresult['penulis'];
										$judul = $daftarresult['judul_berita'];
										$status = $daftarresult['status'];
										
										echo "<tr><td>$judul</td><td>$penulis</td><td>$status</td><td>
										<form action=\"$_SERVER[PHP_SELF]?page=daftar-berita\" method='post'>
										<input type='hidden' name='id' value=$id />
										<input type='submit' name='delete' value='Del'/><input type='submit' name='edit' value='Edit'/>
										</form>
										</td></tr>";
										
										}
										echo "</table>";
									}
								break;
							
							case "daftar-mahasiswa":
							
								if(ISSET($_POST['delete']))
								{
									$id = $_POST['id'];
									$delete = "delete from tbl_mhsiswa where id_mahasiswa = '$id'";
									mysql_query($delete);
								}
								
								else
									{
										$daftar = "select * from tbl_mhsiswa order by id_mahasiswa DESC";
										$daftarquery = mysql_query($daftar);
										
										echo "<h1 class='judul'>Daftar Mahasiswa :</h2></p>";
										echo "<table class='daftarberita'>
										<tr><th >Nama</th><th>NIM</th><th>Jurusan</th>
										<th width='30%'>Alamat</th><th>Telepon</th><th>Action</th>
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
											<form action='admin.php?page=daftar-mahasiswa' method='post'>
											<input type='hidden' name='id' value=\"$id\">
											<td><input type='submit' name='delete' value='Del'/></form></td>";
										}
										echo "</table>";
									}	
								break;

							case "daftar-calon-mahasiswa-baru":
							
								if (ISSET($_POST['delete']))
									{
										$id = $_POST['id'];
										$delete = "delete from tbl_cln_mahasiswa where id_daftar = '$id'";
										mysql_query($delete);
									}
								
								else
									{
										$daftar = "select * from tbl_cln_mahasiswa order by id_daftar DESC";
										$daftarquery = mysql_query($daftar);
										
										echo "<h1 class='judul'>Daftar Calon Mahasiswa Baru :</h2></p>";
										echo "<table class='daftarberita'>
										<tr><th >Nama</th><th>Tanggal Lahir</th><th>Lulusan</th><th>Tahun Ajaran</th>
										<th width='25%'>Alamat</th><th>Telepon</th><th >Action</th>
										</tr>";
										
										while ($calon = mysql_fetch_array($daftarquery))
										{
										$id = $calon['id_daftar'];
										$nama = $calon['nama_pendaftar'];
										$tanggallahir = $calon['tgl_lahir'];
										$lulusan = $calon['lulusan_sekolah'];
										$tahunajaran = $calon['tahun_ajaran'];
										$alamat = $calon['alamat'];
										$telepon = $calon['telp'];
										
										echo "<tr><td>$nama</td><td>$tanggallahir</td><td>$lulusan</td><td>$tahunajaran</td>
										<td>$alamat</td><td>$telepon</td>
										<td>
										<form action=\"admin.php?page=daftar-calon-mahasiswa-baru\" method=\"post\">
										<input type='submit' name='delete' value='Del'/>
										<input type='hidden' name='id' value=\"$id\" />
										</form>
										</td></tr>";
										}
										echo "</table>";
									}	
								break;

							case "tambah-mahasiswa":
							
								if ($_REQUEST['post'] == 'new')
									{
										$nama = $_POST['nama'];
										$nim = $_POST['nim'];
										$tanggallahir = $_POST['tanggallahir'];
										$jeniskelamin = $_POST['jeniskelamin'];
										$status = $_POST['status'];
										$jurusan = $_POST['jurusan'];
										$lulusansekolah = $_POST['lulusansekolah'];
										$tahunajaran = $_POST['tahunajaran'];
										$pekerjaan = $_POST['pekerjaan'];
										$kelurahan = $_POST['kelurahan'];
										$kecamatan = $_POST['kecamatan'];
										$kota = $_POST['kota'];
										$provinsi = $_POST['provinsi'];
										$alamat = $_POST['alamat'];
										$telepon = $_POST['telepon'];
										$email = $_POST['email'];
										$website = $_POST['website'];

										$new = "insert into tbl_mhsiswa
										(nama_mahasiswa, jns_kelamin, tgl_lahir, status, jurusan, nim,lulusan_sekolah, tahun_ajaran, 
										pekerjaan, alamat, kelurahan, kecamatan, kota, provinsi, telp, email, website ) values 
										('$nama',  '$jeniskelamin', '$tanggallahir', '$status', '$jurusan' ,'$nim', '$lulusansekolah',
										'$tahunajaran', '$pekerjaan', '$alamat','$kelurahan','$kecamatan','$kota','$provinsi',
										'$telepon', '$email', '$website')";

										mysql_query($new);
										echo "<p>Mahasiswa telah dibuat...</p>";
										echo "<meta http-equiv='refresh' content='2;url=admin.php?page=daftar-mahasiswa'>";	
									}
								
								else
									{
										echo "<h1 class=\"judul\">Tambah Mahasiswa:</h1>
										<table border=\"0\" width=\"100%\">
										<form action=\"$_SERVER[PHP_SELF]?page=tambah-mahasiswa&post=new\" method=\"POST\">
										<tr><td>Nama :</td><td><input type=\"text\" name=\"nama\" size=\"40\"></td></tr>
										<tr><td>NIM :</td><td><input type=\"text\" name=\"nim\" size=\"35\"></td></tr>
										<tr><td>Tanggal Lahir :</td><td><input type=\"text\" name=\"tanggallahir\" size=\"25\"></td></tr>
										<tr><td>Jenis Kelamin :</td><td><select name=\"jeniskelamin\">
										<option value=\"laki-laki\">Laki-laki</option>
										<option value=\"perempuan\">Perempuan</option></td></tr>
										<tr><td>Status :</td><td><select name=\"status\">
										<option value=\"Belum Kawin\">Belum Kawin</option>
										<option value=\"Kawin\">Sudah Kawin</option>
										<option value=\"Cerai\">Cerai</option>
										</select></td></tr>
										<tr><td>Jurusan:</td><td><input type=\"text\" name=\"jurusan\" size=\"35\"></td></tr>
										<tr><td>Lulusan Sekolah :</td><td><input type=\"text\" name=\"lulusansekolah\" size=\"35\"></td></tr>
										<tr><td>Tahun Ajaran :</td><td><input type=\"text\" name=\"tahunajaran\" size=\"35\"></td></tr>
										<tr><td>Pekerjaan :</td><td><input type=\"text\" name=\"pekerjaan\" size=\"35\"></td></tr>
										<tr><td>Kelurahan :</td><td><input type=\"text\" name=\"kelurahan\" size=\"35\"></td></tr>
										<tr><td>Kecamatan :</td><td><input type=\"text\" name=\"kecamatan\" size=\"35\"></td></tr>
										<tr><td>Kota :</td><td><input type=\"text\" name=\"kota\" size=\"35\"></td></tr>
										<tr><td>Provinsi :</td><td><input type=\"text\" name=\"provinsi\" size=\"35\"></td></tr>
										<tr><td>Alamat :</td><td><textarea cols=\"50\" rows=\"6\" name=\"alamat\"></textarea></td></tr>
										<tr><td>Telepon :</td><td><input type=\"text\" name=\"telepon\" size=\"35\"></td></tr>
										<tr><td>Email :</td><td><input type=\"text\" name=\"email\" size=\"35\"></td></tr>
										<tr><td>Website :</td><td><input type=\"text\" name=\"website\" size=\"35\"></td></tr>
										<tr><td></td><td><input type=\"submit\" name=\"submit\" value=\"Daftar!\"></td></tr>
										</form>
										</table>";
									}
								break;

							case "daftar-nilai-mahasiswa":
							
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
								break;

							case "tambah-nilai-mahasiswa":
							
								if ($_REQUEST['post'] == 'new')
									{
										$nim = $_POST['nim'];
										$matakuliah = $_POST['matakuliah'];
										$nilai = $_POST['nilai'];
										$dosen = $_POST['dosen'];
										$insertnilai = "insert into tbl_nilai_mahasiswa(nim, mata_kuliah, nilai_mahasiswa, dosen_mata_kuliah) 
										values('$nim', '$matakuliah', '$nilai', '$dosen')";
										mysql_query($insertnilai);
										echo "<p>Nilai telah dimasukkan</p>";
										echo "<meta http-equiv='refresh' content='2;url=admin.php?page=daftar-nilai-mahasiswa'>";	
									}
								
								else
									{
										echo "<h1 class=\"judul\">Tambah Nilai Mahasiswa:</h1>
										<table border=\"0\" width=\"50%\">
										<form action=\"admin.php?page=tambah-nilai-mahasiswa&post=new\" method=\"POST\">
										<tr><td>NIM :</td><td><input type=\"text\" name=\"nim\" size=\"25\"></td></tr>
										<tr><td>Mata Kuliah :</td><td><input type=\"text\" name=\"matakuliah\" size=\"25\"></td></tr>
										<tr><td>Nilai :</td><td><input type=\"text\" name=\"nilai\" size=\"25\"></td></tr>
										<tr><td>Dosen :</td><td><input type=\"text\" name=\"dosen\" size=\"25\"></td></tr>
										<tr><td></td><td><input type=\"submit\" name=\"submit\" value=\"Tambah!\"></td></tr>
										</form>
										</table>";
										
									}
								break;							
								

								
							default: 
								echo "<p class='judul'>Judul Berita : </p>";
								echo "<input type='text' size='75' name='judulberita' />";
								echo "<p class='isiberita'>Status</p>";
								echo "<select name='status'>
									  <option value='publish'>Publish</option>
									  <option value='draft'>Draft</option>
									  <option value='pending'>Pending</option>
									  </select>";
								echo "<p class='isiberita'>Isi Berita : </p>";
								echo "<textarea name='isiberita' cols='107' rows='20'></textarea><br/>";
								echo "<input name='submit' type='submit' value='Submit'";
								break;
								break;
						}				
	
			?>
			
			</div>
			<br class="clearfloat" />
			
			</div>
			<br/><br/><br/><br/>
			</div>
			
			<?php	
				}
			
			else
				{
			?>
					<div id="loginbox">
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
					<p>username:<input type="text" name="username" size="35"/></p>
					<p>password:<input type="password" name="password" size="35"/></p>
					<input type="submit" name="login" value="login!"/>
					</form>
					</div>
			<?php	
				}
			?>
			
	</body>
</html>