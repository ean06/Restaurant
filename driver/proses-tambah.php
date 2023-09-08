<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?

if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $jeniskelamin = $_POST['GENDER'];
    $notelpon = $_POST['NOTELFON'];
    $platno = $_POST['PLATNO'];
    


    // buat query
    $sql = "INSERT INTO pdriver (ID, NAMA, ALAMAT, GENDER, NOTELFON, PLATNO) VALUE ('$id', '$nama', '$alamat', '$jeniskelamin', '$notelpon', '$platno')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: profile.php?status=sukses');
    }else {
        header('Location: profile.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>