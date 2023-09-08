<?php

include("../config.php");

if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $deskripsi = $_POST['DESKRIPSI'];
    $harga = $_POST['HARGA'];
    
    
    // buat query update
    $sql = "UPDATE brizola SET ID = '$_POST[ID]', NAMA = '$_POST[NAMA]', DESKRIPSI = '$_POST[DESKRIPSI]', HARGA = '$_POST[HARGA]'  WHERE ID = '$_POST[ID]'";
    $query = mysqli_query($db, $sql);
    if($query){
        //kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: ../brizola.php');
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