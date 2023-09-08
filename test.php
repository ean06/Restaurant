<?php
    include("config.php");
    $sql = "SELECT * FROM userprofile";
    $query = mysqli_query($db, $sql);
    while($userprofile = mysqli_fetch_array($test)){
    $nama = $userprofile[1];
    }

    
?>