<?php
require 'function.php';

if ( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM driver WHERE username = '$username'");

    //cek username
    if ( mysqli_num_rows($result) === 1 ) {

        //cek password nya
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: opsi.php");
            exit;
        }

    }
    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

    <div class="container">
        <h1>LOGIN</h1>

    <?php
        if ( isset($error) ):
    ?>
    <script>
        alert('Username dan Password salah');
    </script>
    <?php
        endif;
    ?>

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
                <button type="submit" name="login">SIGN IN</button>
            </li>
        </ul>
    </form>
    </div>
    
</body>
</html>