<?php

include("config.php");

if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $email = $_POST['EMAIL'];
    $notelpon = $_POST['NOTELFON'];
    $jeniskelamin = $_POST['GENDER'];
    // buat query update
    $sql = "UPDATE userprofile SET ID = '$_POST[ID]', NAMA = '$_POST[NAMA]', ALAMAT = '$_POST[ALAMAT]', EMAIL = '$_POST[EMAIL]', NOTELFON = '$_POST[NOTELFON]'  WHERE ID = '$_POST[ID]'";
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