<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$nama_database = "bifood";

	$db = mysqli_connect($server, $user, $password, $nama_database);
	if (!$db) (
		die("gagal terhubung dengan database: " . mysqli_connect_error()));

		$test1 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 1");
		$test2 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 2");
		$test3 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 3");
		$test4 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 4");
		$test5 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 5");
		$test6 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 6");
		$test7 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 7");
		$test8 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 8");
		$test9 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 9");
		$test10 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 10");
		$test11 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 11");
		$test12 = mysqli_query($db, "SELECT * FROM presto WHERE ID = 12");
		
		// $test=mysqli_query($db, "SELECT * FROM pdriver ORDER BY ID DESC LIMIT 1");
?>