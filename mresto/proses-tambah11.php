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
    while($presto = mysqli_fetch_array($test12)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir1)){
        $satu = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir2)){
        $dua = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir3)){
        $tiga = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir4)){
        $empat = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir5)){
        $lima = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir6)){
        $enam = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir7)){
        $tujuh = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir8)){
        $delapan = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir9)){
        $sembilan = $altahrir[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM altahrir";
    $query = mysqli_query($db, $sql);
    while($altahrir = mysqli_fetch_array($altahrir10)){
        $sepuluh = $altahrir[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir1)){
            $a = $altahrir[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir2)){
            $a = $altahrir[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir3)){
            $a = $altahrir[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir4)){
            $a = $altahrir[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir5)){
            $a = $altahrir[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir6)){
            $a = $altahrir[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir7)){
            $a = $altahrir[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir8)){
            $a = $altahrir[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir9)){
            $a = $altahrir[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM altahrir";
        $query = mysqli_query($db, $sql);
        while($altahrir = mysqli_fetch_array($altahrir10)){
            $a = $altahrir[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanaltahrir (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notaaltahrir.php?status=sukses');
    }else {
        header('Location: nota/notaaltahrir.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>