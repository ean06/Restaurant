<?php

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username && $password == "admin") {
        header("Location: index.php");
        exit;
    }
    if($username && $password !== "admin") {
        header("Location: ../index.php");
        exit;
    }

?>