<?php
    include("config.php");
;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/uprofile.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <header>
        <div class="prof">
            <ul>
                <li>
                    <h4 class="uy">
                    <?php
                    include("config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[1]";
                    }
                    ?>
                    </h4>
                    <p><ion-icon name="people-outline"></ion-icon></p> 
                    <ul class="down">
                        <li><a href="home.php"><ion-icon name="person-circle-outline"></ion-icon>&nbsp;&nbsp;HOME</a></li><br><br>
                        <li><a href="index.php"><ion-icon name="log-out-outline"></ion-icon>&nbsp;&nbsp;LOGOUT</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php while($userprofile = mysqli_fetch_array($test)) ?>
    </header>
    <div class="container">
        <h1>USER PROFILE</h1>
        <div class="abc">
            <img src="img/profile.png">
            <h3>
                <?php
                    include("config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[1]";
                    }
                ?>
            </h3><br>
            <a href="admin/listriwayat.php">Riwayat pemesanan</a><br>
            <a href="admin/listuser.php">Edit profile</a>
        </div>
        <div class="efg">
            <h2>DETAILS</h2>
            <h3>NAMA</h3>
            <p>
                <?php
                    include("config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[1]";
                    }
                ?>
            </p>
            <h3>ADDRESS</h3>
            <p>
                <?php
                    include("config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[2]";
                    }
                ?>
            </p>
            <h3>GENDER</h3>
            <p>
                <?php
                    include("config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[5]";
                    }
                ?>
            </p>
        </div>
        <div class="hij">
            <h2>CONTACT</h2>
            <h3>EMAIL</h3>
            <p>
                <?php
                    include("config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[3]";
                    }
                ?>
            </p>
            <h3>NO TELFON</h3>
            <p>
                <?php
                    include("config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[4]";
                    }
                ?>
            </p>
        </div>
    </div>
</body>
</html>