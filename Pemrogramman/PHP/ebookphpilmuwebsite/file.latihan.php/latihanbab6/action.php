<?php
include "koneksi.php";
$action = strtolower($_POST['action']);
$id = $_REQUEST['id'];

if ($action == "delete")
{
echo "Anda memilih aksi delete pada record $id... <br/>";
$delete = "delete from tbl_daftar_mahasiswa where id_daftar = '$id'";
$delete_query = mysql_query($delete);
if ($delete_query) echo "Record $id berhasil dihapus ...";
else echo "Gagal menghapus record";
}

else 
{
$select = "select * from tbl_daftar_mahasiswa where id_daftar = '$id'";
$select_query = mysql_query($select);

while($select_result = mysql_fetch_array($select_query))
	{
		$id = $select_result['id_daftar'] ;
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


?>

<form action="update.php" method="POST">
<table border='0' width='35%' cellpadding='2'  cellspacing='2' align='center'>
<caption><h2>Formulir Pendaftaran Mahasiswa Baru</h2></caption>
<input type="hidden" name="id" size="30" value="<?php echo $id ; ?>" maxlength="50"/>
<tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $nama ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Jenis Kelamin</td><td><input type="radio" name="jenis_kelamin" value="pria"/><label for="jenis_kelamin">Pria</label>
<input type="radio" name="jenis_kelamin" value="wanita"/><label for="jenis_kelamin">Wanita</label>
</td></tr>
<tr><td>Status</td><td>
<select name="status">
<option value="Pilih Status Anda">Pilih Status Anda</option>
<option value="menikah">Menikah</option>
<option value="single">Single</option>
</select>
</td></tr>
<tr><td>Lulusan Sekolah</td><td><input type="text" name="sekolah" value="<?php echo $lulusan ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Tahun Ajaran</td><td><select name="tahun_ajaran">
<option>Pilih Tahun Ajaran</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select></td></tr>
<tr><td>Pekerjaan</td><td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Alamat</td><td><textarea name="alamat"  cols="30" rows="4"><?php echo $alamat ; ?></textarea></td></tr>
<tr><td>Kelurahan</td><td><input type="text" name="kelurahan" value="<?php echo $kelurahan ; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Kecamatan</td><td><input type="text" name="kecamatan" value="<?php echo $kecamatan; ?>" size="30" maxlength="50"/></td></tr>
<tr><td>Kota</td><td><input type="text" name="kota" size="30" value="<?php echo $kota ; ?>" maxlength="50"/></td></tr>
<tr><td>Provinsi</td><td>
<select name="provinsi">
<option value="Pilih Provinsi Anda">Pilih Provinsi Anda</option>
<option value="Bali">Bali</option>
<option value="Bangka Belitung">Bangka Belitung</option>
<option value="Banten">Banten</option>
<option value="Bengkulu">Bengkulu</option>

<option value="Gorontalo">Gorontalo</option>
<option value="Irian Jaya Barat">Irian Jaya Barat</option>
<option value="Jabotabekdecipsawcib">Jabotabekdecipsawcib</option>
<option value="Jambi">Jambi</option>
<option value="Jawa Barat">Jawa Barat</option>
<option value="Jawa Tengah">Jawa Tengah</option>
<option value="Jawa Timur">Jawa Timur</option>
<option value="Kalimantan Barat">Kalimantan Barat</option>
<option value="Kalimantan Selatan">Kalimantan Selatan</option>

<option value="Kalimantan Tengah">Kalimantan Tengah</option>
<option value="Kalimantan Timur">Kalimantan Timur</option>
<option value="Kepulauan Riau">Kepulauan Riau</option>
<option value="Lampung">Lampung</option>
<option value="Lokasi Lain-lain">Lokasi Lain-lain</option>
<option value="Maluku">Maluku</option>
<option value="Maluku Utara">Maluku Utara</option>
<option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>

<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
<option value="Papua">Papua</option>
<option value="Riau">Riau</option>
<option value="Sulawesi Barat">Sulawesi Barat</option>
<option value="Sulawesi Selatan">Sulawesi Selatan</option>
<option value="Sulawesi Tengah">Sulawesi Tengah</option>
<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
<option value="Sulawesi Utara">Sulawesi Utara</option>
<option value="Sumatera Barat">Sumatera Barat</option>

<option value="Sumatera Selatan">Sumatera Selatan</option>
<option value="Sumatera Utara">Sumatera Utara</option>
<option value="Yogyakarta">Yogyakarta</option>
</select></td></tr>
<tr><td>No Telepon</td><td><input type="text" name="telepon" size="30" value="<?php echo $telepon ; ?>" maxlength="50"/></td></tr>
<tr><td></td><td><input type="submit" name="kirim" value="Update!"/></td></tr>
</table>
</form>

<?php
	}
}
?>