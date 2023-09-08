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
    while($presto = mysqli_fetch_array($test1)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test1)){
        $satu = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test2)){
        $dua = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test3)){
        $tiga = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test5)){
        $empat = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test5)){
        $lima = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test6)){
        $enam = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test7)){
        $tujuh = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test8)){
        $delapan = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test9)){
        $sembilan = $solaria[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM solaria";
    $query = mysqli_query($db, $sql);
    while($solaria = mysqli_fetch_array($test10)){
        $sepuluh = $solaria[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test1)){
            $a = $solaria[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test2)){
            $a = $solaria[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test3)){
            $a = $solaria[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test4)){
            $a = $solaria[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test5)){
            $a = $solaria[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test6)){
            $a = $solaria[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test7)){
            $a = $solaria[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test8)){
            $a = $solaria[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test9)){
            $a = $solaria[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM solaria";
        $query = mysqli_query($db, $sql);
        while($solaria = mysqli_fetch_array($test10)){
            $a = $solaria[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pemesananmakanan (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/nota.php?status=sukses');
    }else {
        header('Location: nota/nota.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>