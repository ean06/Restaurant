<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$nama_database = "bifood";

	$db = mysqli_connect($server, $user, $password, $nama_database);
	if (!$db) (
		die("gagal terhubung dengan database: " . mysqli_connect_error()));
		$test=mysqli_query($db, "SELECT * FROM userprofile ORDER BY ID DESC LIMIT 1");
		

		$test1 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 1");
		$test2 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 2");
		$test3 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 3");
		$test4 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 4");
		$test5 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 5");
		$test6 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 6");
		$test7 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 7");
		$test8 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 8");
		$test9 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 9");
		$test10 = mysqli_query($db, "SELECT * FROM solaria WHERE ID = 10");

		$gastronomi1 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 1");
		$gastronomi2 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 2");
		$gastronomi3 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 3");
		$gastronomi4 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 4");
		$gastronomi5 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 5");
		$gastronomi6 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 6");
		$gastronomi7 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 7");
		$gastronomi8 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 8");
		$gastronomi9 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 9");
		$gastronomi10 = mysqli_query($db, "SELECT * FROM gastronomi WHERE ID = 10");

		$mandala1 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 1");
		$mandala2 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 2");
		$mandala3 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 3");
		$mandala4 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 4");
		$mandala5 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 5");
		$mandala6 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 6");
		$mandala7 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 7");
		$mandala8 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 8");
		$mandala9 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 9");
		$mandala10 = mysqli_query($db, "SELECT * FROM mandala WHERE ID = 10");

		$abuba1 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 1");
		$abuba2 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 2");
		$abuba3 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 3");
		$abuba4 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 4");
		$abuba5 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 5");
		$abuba6 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 6");
		$abuba7 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 7");
		$abuba8 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 8");
		$abuba9 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 9");
		$abuba10 = mysqli_query($db, "SELECT * FROM abuba WHERE ID = 10");

		$brizola1 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 1");
		$brizola2 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 2");
		$brizola3 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 3");
		$brizola4 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 4");
		$brizola5 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 5");
		$brizola6 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 6");
		$brizola7 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 7");
		$brizola8 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 8");
		$brizola9 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 9");
		$brizola10 = mysqli_query($db, "SELECT * FROM brizola WHERE ID = 10");

		$zoku1 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 1");
		$zoku2 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 2");
		$zoku3 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 3");
		$zoku4 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 4");
		$zoku5 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 5");
		$zoku6 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 6");
		$zoku7 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 7");
		$zoku8 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 8");
		$zoku9 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 9");
		$zoku10 = mysqli_query($db, "SELECT * FROM zoku WHERE ID = 10");

		$oniquaer1 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 1");
		$oniquaer2 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 2");
		$oniquaer3 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 3");
		$oniquaer4 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 4");
		$oniquaer5 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 5");
		$oniquaer6 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 6");
		$oniquaer7 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 7");
		$oniquaer8 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 8");
		$oniquaer9 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 9");
		$oniquaer10 = mysqli_query($db, "SELECT * FROM oniquaer WHERE ID = 10");

		$kikugawa1 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 1");
		$kikugawa2 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 2");
		$kikugawa3 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 3");
		$kikugawa4 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 4");
		$kikugawa5 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 5");
		$kikugawa6 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 6");
		$kikugawa7 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 7");
		$kikugawa8 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 8");
		$kikugawa9 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 9");
		$kikugawa10 = mysqli_query($db, "SELECT * FROM kikugawa WHERE ID = 10");

		$marufuku1 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 1");
		$marufuku2 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 2");
		$marufuku3 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 3");
		$marufuku4 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 4");
		$marufuku5 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 5");
		$marufuku6 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 6");
		$marufuku7 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 7");
		$marufuku8 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 8");
		$marufuku9 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 9");
		$marufuku10 = mysqli_query($db, "SELECT * FROM marufuku WHERE ID = 10");

		$aljazeerah1 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 1");
		$aljazeerah2 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 2");
		$aljazeerah3 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 3");
		$aljazeerah4 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 4");
		$aljazeerah5 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 5");
		$aljazeerah6 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 6");
		$aljazeerah7 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 7");
		$aljazeerah8 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 8");
		$aljazeerah9 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 9");
		$aljazeerah10 = mysqli_query($db, "SELECT * FROM aljazeerah WHERE ID = 10");

		$hadramout1 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 1");
		$hadramout2 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 2");
		$hadramout3 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 3");
		$hadramout4 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 4");
		$hadramout5 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 5");
		$hadramout6 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 6");
		$hadramout7 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 7");
		$hadramout8 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 8");
		$hadramout9 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 9");
		$hadramout10 = mysqli_query($db, "SELECT * FROM hadramout WHERE ID = 10");

		$altahrir1 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 1");
		$altahrir2 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 2");
		$altahrir3 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 3");
		$altahrir4 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 4");
		$altahrir5 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 5");
		$altahrir6 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 6");
		$altahrir7 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 7");
		$altahrir8 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 8");
		$altahrir9 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 9");
		$altahrir10 = mysqli_query($db, "SELECT * FROM altahrir WHERE ID = 10");
		
		
		