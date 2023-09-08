<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?

if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $notelpon = $_POST['NOTELFON'];
    $kategori = $_POST['KATEGORI'];
    


    // buat query
    $sql = "INSERT INTO presto (ID, NAMA, ALAMAT, NOTELFON, KATEGORI) VALUE ('$id', '$nama', '$alamat', '$notelpon', '$kategori')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: listuser.php?status=sukses');
    }else {
        header('Location: listuser.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>