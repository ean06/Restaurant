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
    while($presto = mysqli_fetch_array($test2)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi1)){
        $satu = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi2)){
        $dua = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi3)){
        $tiga = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi4)){
        $empat = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi5)){
        $lima = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi6)){
        $enam = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi7)){
        $tujuh = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi8)){
        $delapan = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi9)){
        $sembilan = $gastronomi[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM gastronomi";
    $query = mysqli_query($db, $sql);
    while($gastronomi = mysqli_fetch_array($gastronomi10)){
        $sepuluh = $gastronomi[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi1)){
            $a = $gastronomi[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi2)){
            $a = $gastronomi[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi3)){
            $a = $gastronomi[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi4)){
            $a = $gastronomi[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi5)){
            $a = $gastronomi[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi6)){
            $a = $gastronomi[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi7)){
            $a = $gastronomi[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi8)){
            $a = $gastronomi[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi9)){
            $a = $gastronomi[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM gastronomi";
        $query = mysqli_query($db, $sql);
        while($gastronomi = mysqli_fetch_array($gastronomi10)){
            $a = $gastronomi[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesangastronomi (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notagastronomi.php?status=sukses');
    }else {
        header('Location: nota/notagastronomi.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>