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
    while($presto = mysqli_fetch_array($test7)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer1)){
        $satu = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer2)){
        $dua = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer3)){
        $tiga = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer4)){
        $empat = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer5)){
        $lima = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer6)){
        $enam = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer7)){
        $tujuh = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer8)){
        $delapan = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer9)){
        $sembilan = $oniquaer[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM oniquaer";
    $query = mysqli_query($db, $sql);
    while($oniquaer = mysqli_fetch_array($oniquaer10)){
        $sepuluh = $oniquaer[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer1)){
            $a = $oniquaer[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer2)){
            $a = $oniquaer[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer3)){
            $a = $oniquaer[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer4)){
            $a = $oniquaer[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer5)){
            $a = $oniquaer[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer6)){
            $a = $oniquaer[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer7)){
            $a = $oniquaer[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer8)){
            $a = $oniquaer[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer9)){
            $a = $oniquaer[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM oniquaer";
        $query = mysqli_query($db, $sql);
        while($oniquaer = mysqli_fetch_array($oniquaer10)){
            $a = $oniquaer[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanoniquaer (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notaoniquaer.php?status=sukses');
    }else {
        header('Location: nota/notaoniquaer.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>