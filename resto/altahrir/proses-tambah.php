<?php

include("../config.php");

// cek apakah tombol daftar sudah diklik atau belum?

if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $deskripsi = $_POST['DESKRIPSI'];
    $harga = $_POST['HARGA'];
    


    // buat query
    $sql = "INSERT INTO altahrir (ID, NAMA, DESKRIPSI, HARGA) VALUE ('$id', '$nama', '$deskripsi', '$harga')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: ../altahrir.php?status=sukses');
    }else {
        header('Location: ../altahrir.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>