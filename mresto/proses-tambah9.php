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
    while($presto = mysqli_fetch_array($test8)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa1)){
        $satu = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa2)){
        $dua = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa3)){
        $tiga = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa4)){
        $empat = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa5)){
        $lima = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa6)){
        $enam = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa7)){
        $tujuh = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa8)){
        $delapan = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa9)){
        $sembilan = $kikugawa[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM kikugawa";
    $query = mysqli_query($db, $sql);
    while($kikugawa = mysqli_fetch_array($kikugawa10)){
        $sepuluh = $kikugawa[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa1)){
            $a = $kikugawa[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa2)){
            $a = $kikugawa[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa3)){
            $a = $kikugawa[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa4)){
            $a = $kikugawa[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa5)){
            $a = $kikugawa[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa6)){
            $a = $kikugawa[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa7)){
            $a = $kikugawa[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa8)){
            $a = $kikugawa[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa9)){
            $a = $kikugawa[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM kikugawa";
        $query = mysqli_query($db, $sql);
        while($kikugawa = mysqli_fetch_array($kikugawa10)){
            $a = $kikugawa[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesankikugawa (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notakikugawa.php?status=sukses');
    }else {
        header('Location: nota/notakikugawa.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>