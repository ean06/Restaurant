<?php

include("../config.php");

if( isset($_GET['ID'])){

    // ambil id dari query string
    $id = $_GET['ID'];

    // buat query hapus
    $sql = "DELETE FROM mandala WHERE ID = '$_GET[ID]'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil
    if( $query ){
        header('Location: ../mandala.php');
    }else{
        die("gagal menghapus...");
    }
}else {
    die("akses dilarang...");
}

?>