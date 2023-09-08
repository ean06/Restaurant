<?php

//koneksi ke database
$server = "localhost"; //pakai localhost
    $user = "root"; //import ke localhost
    $password = ""; //lsng isi di form
    $nama_database = "bifood"; //nama sesuai yg udah dibuat

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if( !$db){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }


function registrasi($data){
    global $db;

    $username = strtolower (stripslashes ($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result) ){
        echo"<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }

    //cek konfirmasi password
    if ( $password !== $password2 ){
        echo"<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //tambahkan user baru ke database
    mysqli_query($db, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($db);

}

?>