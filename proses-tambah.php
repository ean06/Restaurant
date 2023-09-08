<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?

if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $email = $_POST['EMAIL'];
    $notelpon = $_POST['NOTELFON'];
    $jeniskelamin = $_POST['GENDER'];


    // buat query
    $sql = "INSERT INTO userprofile (ID, NAMA, ALAMAT, EMAIL, NOTELFON, GENDER) VALUE ('$id', '$nama', '$alamat', '$email', '$notelpon', '$jeniskelamin')";
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