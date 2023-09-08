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
    while($presto = mysqli_fetch_array($test9)){
        $resto = $presto[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku1)){
        $satu = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku2)){
        $dua = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku3)){
        $tiga = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku4)){
        $empat = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku5)){
        $lima = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku6)){
        $enam = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku7)){
        $tujuh = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku8)){
        $delapan = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku9)){
        $sembilan = $marufuku[1];
    }

    include("../config.php");
    $sql = "SELECT * FROM marufuku";
    $query = mysqli_query($db, $sql);
    while($marufuku = mysqli_fetch_array($marufuku10)){
        $sepuluh = $marufuku[1];
    }

    if($menu1 == $satu ){
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku1)){
            $a = $marufuku[3];
        }
    } elseif ($menu1 == $dua) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku2)){
            $a = $marufuku[3];
        }
    }elseif ($menu1 == $tiga) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku3)){
            $a = $marufuku[3];
        }
    }elseif ($menu1 == $empat) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku4)){
            $a = $marufuku[3];
        }
    }elseif ($menu1 == $lima) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku5)){
            $a = $marufuku[3];
        }
    }elseif ($menu1 == $enam) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku6)){
            $a = $marufuku[3];
        }
    }elseif ($menu1 == $tujuh) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku7)){
            $a = $marufuku[3];
        }
    }elseif ($menu1 == $delapan) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku8)){
            $a = $marufuku[3];
        }
    }elseif ($menu1 == $sembilan) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku9)){
            $a = $marufuku[3];
        }
    }elseif ($menu1 == $sepuluh) {
        include("../config.php");
        $sql = "SELECT * FROM marufuku";
        $query = mysqli_query($db, $sql);
        while($marufuku = mysqli_fetch_array($marufuku10)){
            $a = $marufuku[3];
        }
    }

    $jum = $jm1 * $a;
    $totalpem = $jum + 15000;
    // buat query
    $sql = "INSERT INTO pesanmarufuku (ID, RESTO, NAMA, ALAMAT, TANGGAL, MENU, JUMLAH, CATATAN, PEMBAYARAN, SUBTOTAL, TOTAL) VALUE ('', '$resto', '$nama', '$alamat', '$tanggal', '$menu1', '$jm1', '$catatan', '$mp', '$jum', '$totalpem')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil ?
    if ( $query ){
        header('Location: nota/notamarufuku.php?status=sukses');
    }else {
        header('Location: nota/notamarufuku.php?status=gagal');
    }
}else {
    die("Akses dilarang....");
}

?>