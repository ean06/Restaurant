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
    while($presto = mysqli_fetch_array($test6)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku1)){
        $satu = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku2)){
        $dua = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku3)){
        $tiga = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku4)){
        $empat = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku5)){
        $lima = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku6)){
        $enam = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku7)){
        $tujuh = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku8)){
        $delapan = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku9)){
        $sembilan = $zoku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM zoku";
    $query = mysqli_query($db, $sql);
    while($zoku = mysqli_fetch_array($zoku10)){
        $sepuluh = $zoku[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku1)){
            $a = $zoku[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku2)){
            $a = $zoku[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku3)){
            $a = $zoku[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku4)){
            $a = $zoku[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku5)){
            $a = $zoku[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku6)){
            $a = $zoku[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku7)){
            $a = $zoku[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku8)){
            $a = $zoku[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku9)){
            $a = $zoku[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM zoku";
        $query = mysqli_query($db, $sql);
        while($zoku = mysqli_fetch_array($zoku10)){
            $a = $zoku[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanzoku (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notazoku.php?status=sukses');
    }else {
        header('Location: nota/notazoku.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>