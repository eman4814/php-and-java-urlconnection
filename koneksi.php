<?php 
	$dbhost="mysql.idhostinger.com";
	$dbuser="u550365818_root";
	$dbpass="fssadmin";
	$dbname="u550365818_fss";

	//melakukan koneksi ke database
	$con= new mysqli($dbhost,$dbuser,$dbpass,$dbname);

	//cek koneksi berhasil atau tidak
	if ($con->connect_error) {
		//jika terjadi error tampilkan pesan koneksi gagal dan exit proses
    	die("Connection failed: " . $con->connect_error);
	} 

 ?>