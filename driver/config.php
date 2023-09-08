<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$nama_database = "bifood";

	$db = mysqli_connect($server, $user, $password, $nama_database);
	if (!$db) (
		die("gagal terhubung dengan database: " . mysqli_connect_error()));
		$test=mysqli_query($db, "SELECT * FROM pdriver ORDER BY ID DESC LIMIT 1");
?>