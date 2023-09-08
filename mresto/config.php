<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$nama_database = "bifood";

	$db = mysqli_connect($server, $user, $password, $nama_database);
	if (!$db) (
		die("gagal terhubung dengan database: " . mysqli_connect_error()));

		$test=mysqli_query($db, "SELECT * FROM pemesananmakanan ORDER BY ID DESC LIMIT 1");
		$test2= mysqli_query($db, "SELECT * FROM pesanabuba ORDER BY ID DESC LIMIT 1");
		$test3= mysqli_query($db, "SELECT * FROM pesangastronomi ORDER BY ID DESC LIMIT 1");
		$test4= mysqli_query($db, "SELECT * FROM pesanmandala ORDER BY ID DESC LIMIT 1");
		$test5= mysqli_query($db, "SELECT * FROM pesanbrizola ORDER BY ID DESC LIMIT 1");
		$test6= mysqli_query($db, "SELECT * FROM pesanzoku ORDER BY ID DESC LIMIT 1");
		$test7= mysqli_query($db, "SELECT * FROM pesanoniquaer ORDER BY ID DESC LIMIT 1");
		$test8= mysqli_query($db, "SELECT * FROM pesankikugawa ORDER BY ID DESC LIMIT 1");
		$test9= mysqli_query($db, "SELECT * FROM pesanmarufuku ORDER BY ID DESC LIMIT 1");
		$test10= mysqli_query($db, "SELECT * FROM pesanaljazeerah ORDER BY ID DESC LIMIT 1");
		$test11= mysqli_query($db, "SELECT * FROM pesanhadramout ORDER BY ID DESC LIMIT 1");
		$test12= mysqli_query($db, "SELECT * FROM pesanaltahrir ORDER BY ID DESC LIMIT 1");
?>