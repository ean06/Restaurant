<?php
require 'function.php';

if( isset($_POST["register"]) ){
    if(registrasi($_POST) > 0){
        echo"<script>
                alert('User baru telah ditambahkan!');
            </script>";
    }else{
        echo mysqli_error($db);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN REGISTRASI</title>
    <link rel="stylesheet" type="text/css" href="../css/regis.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    
    <div class="container">
    <h1>REGISTRASI</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" placeholder="Masukkan username" name="username" id="username">
                    <hr>
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" placeholder="Masukkan password" name="password" id="password">
                    <hr>
                </li>
                <li>
                    <label for="password2">Konfirmasi password :</label>
                    <input type="password" placeholder="Masukkan konfirmasi password" name="password2" id="password2">
                    <hr>
                </li>
                <div class="lo">
                    <p class="acc">Have an account?</p>
                    <p><a href="login.php">LOGIN</a></p>
                </div>
                <li>
                    <button type="submit" name="register">SIGN UP</button>
                </li>
            </ul>
        </form>
    </div>
    <div class="back">
        <a href="../index.php">
            <ion-icon name="log-out-outline"></ion-icon></a> 
    </div>
    
</body>
</html>