<?php
$servername = "localhost";
$username 	= "root";
$password 	= "";
$database 	= "pendaftaran";

$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
	die("Connection failed: ". mysqli_connect_error()); }

// Buat tabel daftar
$sql = "CREATE TABLE daftar (
jenis_pendaftaran VARCHAR(10) NOT NULL,
tanggal_masuk_sekolah DATE NOT NULL,
nis VARCHAR(50) NOT NULL,
nomer_peserta_ujian VARCHAR(50) NOT NULL,
pernah_paud VARCHAR(10) NOT NULL,
pernah_tk VARCHAR(10) NOT NULL,
skhun VARCHAR(50) NOT NULL,
ijazah VARCHAR(50) NOT NULL,
hobi VARCHAR(50) NOT NULL,
citacita VARCHAR(50) NOT NULL,
nama VARCHAR(50) NOT NULL,
jenis_kelamin VARCHAR(50) NOT NULL,
nisn VARCHAR(50) NOT NULL PRIMARY KEY,
nik VARCHAR(50) NOT NULL,
tempat_lahir VARCHAR(50) NOT NULL,
tanggal_lahir DATE NOT NULL,
agama VARCHAR(50) NOT NULL,
berkebutuhan_khusus VARCHAR(50) NOT NULL,
alamat VARCHAR(50) NOT NULL,
rt VARCHAR(50) NOT NULL,
rw VARCHAR(50) NOT NULL,
dusun VARCHAR(50) NOT NULL,
desa VARCHAR(50) NOT NULL,
kecamatan VARCHAR(50) NOT NULL,
kode_pos VARCHAR(50) NOT NULL,
tempat_tinggal VARCHAR(50) NOT NULL,
transportasi VARCHAR(50) NOT NULL,
hp VARCHAR(50) NOT NULL,
telp VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
penerima_kps VARCHAR(50) NOT NULL,
no_kps VARCHAR(50) NOT NULL,
kewarganegaraan VARCHAR (50) NOT NULL,
nama_negara VARCHAR(50) NOT NULL
)";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ". $sql . "<br>" . mysqli_error($koneksi); }
mysqli_close($koneksi);
?>