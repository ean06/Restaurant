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
    while($presto = mysqli_fetch_array($test5)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola1)){
        $satu = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola2)){
        $dua = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola3)){
        $tiga = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola4)){
        $empat = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola5)){
        $lima = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola6)){
        $enam = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola7)){
        $tujuh = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola8)){
        $delapan = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola9)){
        $sembilan = $brizola[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM brizola";
    $query = mysqli_query($db, $sql);
    while($brizola = mysqli_fetch_array($brizola10)){
        $sepuluh = $brizola[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola1)){
            $a = $brizola[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola2)){
            $a = $brizola[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola3)){
            $a = $brizola[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola4)){
            $a = $brizola[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola5)){
            $a = $brizola[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola6)){
            $a = $brizola[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola7)){
            $a = $brizola[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola8)){
            $a = $brizola[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola9)){
            $a = $brizola[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM brizola";
        $query = mysqli_query($db, $sql);
        while($brizola = mysqli_fetch_array($brizola10)){
            $a = $brizola[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanbrizola (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notabrizola.php?status=sukses');
    }else {
        header('Location: nota/notabrizola.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>