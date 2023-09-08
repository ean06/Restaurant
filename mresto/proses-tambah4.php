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
    while($presto = mysqli_fetch_array($test3)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala1)){
        $satu = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala2)){
        $dua = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala3)){
        $tiga = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala4)){
        $empat = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala5)){
        $lima = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala6)){
        $enam = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala7)){
        $tujuh = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala8)){
        $delapan = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala9)){
        $sembilan = $mandala[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM mandala";
    $query = mysqli_query($db, $sql);
    while($mandala = mysqli_fetch_array($mandala10)){
        $sepuluh = $mandala[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala1)){
            $a = $mandala[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala2)){
            $a = $mandala[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala3)){
            $a = $mandala[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala4)){
            $a = $mandala[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala5)){
            $a = $mandala[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala6)){
            $a = $mandala[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala7)){
            $a = $mandala[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala8)){
            $a = $mandala[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala9)){
            $a = $mandala[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM mandala";
        $query = mysqli_query($db, $sql);
        while($mandala = mysqli_fetch_array($mandala10)){
            $a = $mandala[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanmandala (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notamandala.php?status=sukses');
    }else {
        header('Location: nota/notamandala.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>