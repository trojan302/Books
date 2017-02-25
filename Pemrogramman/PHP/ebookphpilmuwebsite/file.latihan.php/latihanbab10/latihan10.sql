create database admin_mhs;
use admin_mhs;

create table tbl_cln_mahasiswa (id_daftar int(5) auto_increment primary key, tanggal_daftar date, 
								nama_pendaftar varchar(75), jns_kelamin varchar(15), status varchar(35),
								lulusan_sekolah varchar(75), tahun_ajaran varchar(30), tgl_lahir date, 
								pekerjaan varchar(120), alamat varchar(200), kelurahan varchar(45),
								kecamatan varchar(45), kota varchar(45), provinsi varchar(45),
								telp varchar(50), email varchar(55), website varchar(75));
				
				
create table tbl_mhsiswa (id_mahasiswa int(5) auto_increment primary key, nama_mahasiswa varchar(75),
						  jns_kelamin varchar(15), tgl_lahir date, status varchar(35), jurusan varchar(75),
						  nim int(15), lulusan_sekolah varchar(75), tahun_ajaran varchar(30), pekerjaan varchar(75), alamat varchar(200),
						  kelurahan varchar(45), kecamatan varchar(45), kota varchar(45), provinsi varchar(75),
						 telp varchar(50), email varchar(55), website varchar(75));
						
create table tbl_user_profile (id_user int(5) auto_increment primary key, nama varchar(75),
							   tgl_lahir date, jns_kelamin varchar(15), status varchar(50), pekerjaan varchar(50), 
							   alamat varchar(200), kelurahan varchar(75), kecamatan varchar(75),
							   kota varchar(75), provinsi varchar(75), telp varchar(50), 
							   email varchar(55), website varchar(75));						
						
create table tbl_nilai_mahasiswa (id_nilai int(5) auto_increment primary key, nim int(20),
								  mata_kuliah varchar(50), nilai_mahasiswa varchar(3), dosen_mata_kuliah varchar(50));


create table tbl_artikel (id_artikel int(5) auto_increment primary key, tanggal_publish date,
						  penulis varchar(50), judul_berita varchar(200), isi_berita text, status varchar(20));

						  
create table tbl_komentar (id_komentar int(5) auto_increment primary key, id_berita_kampus int(5), 
							tanggal_komentar date, status varchar(20), nama varchar(75), isi_komentar text, email varchar (50),
							website varchar(50));
			
			
create table tbl_user 	(id_user int(5) auto_increment primary key, username varchar(50), 
						password varchar(128), level varchar(50));