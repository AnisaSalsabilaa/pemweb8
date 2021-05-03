<?php
$servername = "localhost";
$username 	= "root";
$password 	= "";

$koneksi = mysqli_connect($servername, $username, $password);
if (!$koneksi) {
	die ("Connection failed: ". mysqli_connect_error());
}

mysqli_close($koneksi);
?>