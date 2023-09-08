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
    while($presto = mysqli_fetch_array($test11)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout1)){
        $satu = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout2)){
        $dua = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout3)){
        $tiga = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout4)){
        $empat = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout5)){
        $lima = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout6)){
        $enam = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout7)){
        $tujuh = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout8)){
        $delapan = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout9)){
        $sembilan = $hadramout[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM hadramout";
    $query = mysqli_query($db, $sql);
    while($hadramout = mysqli_fetch_array($hadramout10)){
        $sepuluh = $hadramout[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout1)){
            $a = $hadramout[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout2)){
            $a = $hadramout[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout3)){
            $a = $hadramout[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout4)){
            $a = $hadramout[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout5)){
            $a = $hadramout[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout6)){
            $a = $hadramout[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout7)){
            $a = $hadramout[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout8)){
            $a = $hadramout[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout9)){
            $a = $hadramout[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM hadramout";
        $query = mysqli_query($db, $sql);
        while($hadramout = mysqli_fetch_array($hadramout10)){
            $a = $hadramout[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanhadramout (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notahadramout.php?status=sukses');
    }else {
        header('Location: nota/notahadramout.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>