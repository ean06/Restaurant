<?php

include("config.php");

if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $notelpon = $_POST['NOTELFON'];
    $platno = $_POST['PLATNO'];
    
    
    // buat query update
    $sql = "UPDATE pdriver SET ID = '$_POST[ID]', NAMA = '$_POST[NAMA]', ALAMAT = '$_POST[ALAMAT]', NOTELFON = '$_POST[NOTELFON]', PLATNO = '$_POST[PLATNO]'  WHERE ID = '$_POST[ID]'";
    $query = mysqli_query($db, $sql);

    if($query){
        //kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: listuser.php');
    }else {
        //kalau gagal akaan tampil pesan
        die("Gagal menyimpan perbahan....");
    }
    }else {
        die("Akses dilarang...");
    }
    ?>

}

?>