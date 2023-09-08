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
    while($presto = mysqli_fetch_array($test4)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba1)){
        $satu = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba2)){
        $dua = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba3)){
        $tiga = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba4)){
        $empat = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba5)){
        $lima = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba6)){
        $enam = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba7)){
        $tujuh = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba8)){
        $delapan = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba9)){
        $sembilan = $abuba[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM abuba";
    $query = mysqli_query($db, $sql);
    while($abuba = mysqli_fetch_array($abuba10)){
        $sepuluh = $abuba[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba1)){
            $a = $abuba[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba2)){
            $a = $abuba[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba3)){
            $a = $abuba[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba4)){
            $a = $abuba[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba5)){
            $a = $abuba[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba6)){
            $a = $abuba[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba7)){
            $a = $abuba[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba8)){
            $a = $abuba[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba9)){
            $a = $abuba[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM abuba";
        $query = mysqli_query($db, $sql);
        while($abuba = mysqli_fetch_array($abuba10)){
            $a = $abuba[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanabuba (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notaabuba.php?status=sukses');
    }else {
        header('Location: nota/notaabuba.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>