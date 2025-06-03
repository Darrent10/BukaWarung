<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'dbbukawarung';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>