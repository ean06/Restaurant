<?php

include("../config.php");

// cek apakah tombol daftar sudah diklik atau belum?

if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['NAMA'];
    $alamat = $_POST['ALAMAT'];
    $menu1 = $_POST['menu1'];
    $jm1 = $_POST['jmenu1'];
    $mp = $_POST['metbay'];
    $tanggal = $_POST['TANGGAL'];
    $catatan = $_POST['CATATAN'];

    include("../admin/config.php");
    $sql = "SELECT * FROM presto";
    $query = mysqli_query($db, $sql);
    while($presto = mysqli_fetch_array($test10)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah1)){
        $satu = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah2)){
        $dua = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah3)){
        $tiga = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah4)){
        $empat = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah5)){
        $lima = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah6)){
        $enam = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah7)){
        $tujuh = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah8)){
        $delapan = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah9)){
        $sembilan = $aljazeerah[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM aljazeerah";
    $query = mysqli_query($db, $sql);
    while($aljazeerah = mysqli_fetch_array($aljazeerah10)){
        $sepuluh = $aljazeerah[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah1)){
            $a = $aljazeerah[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah2)){
            $a = $aljazeerah[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah3)){
            $a = $aljazeerah[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah4)){
            $a = $aljazeerah[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah5)){
            $a = $aljazeerah[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah6)){
            $a = $aljazeerah[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah7)){
            $a = $aljazeerah[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah8)){
            $a = $aljazeerah[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah9)){
            $a = $aljazeerah[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM aljazeerah";
        $query = mysqli_query($db, $sql);
        while($aljazeerah = mysqli_fetch_array($aljazeerah10)){
            $a = $aljazeerah[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanaljazeerah (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notaaljazeerah.php?status=sukses');
    }else {
        header('Location: nota/notaaljazeerah.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>