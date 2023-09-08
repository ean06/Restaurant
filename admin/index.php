<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD ADMIN</title>
    <link rel="stylesheet" type="text/css" href="../css/aindex.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="header">
        <h1>HALAMAN ADMIN</h1>
    </div>

    <div class="container">
        <div class="konten1">
            <a href="../listuser.php"><ion-icon class="ikon" name="person-outline"></ion-icon></a>
            <a href="listuser.php"><ion-icon class="ikon" name="restaurant-outline"></ion-icon></a>
            <a href="listriwayat.php"><ion-icon class="ikon" name="bag-handle-outline"></ion-icon></a>
            <a href="../driver/listuser.php"><ion-icon class="ikon" name="bicycle-outline"></ion-icon></a>
        </div>
        <div class="konten2">
            <ul>
                <li>PELANGGAN</li>
                <li class="resto">RESTAURANT</li>
                <li class="rp">RIWAYAT <br> PEMESANAN</li>
                <li class="driver">DRIVER</li>
            </ul>
        </div>
    </div>
    <div class="back">
        <a href="../index.php">LOGOUT</a> 
    </div>
</body>
</html>