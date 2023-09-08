<?php
include("config.php");

if(!isset($_GET['ID'])){
    header('Location: listuser.php');
}

// buat query untuk ambil data dari database
$sql = "SELECT * FROM presto WHERE ID='$_GET[ID]'";
$query = mysqli_query($db, $sql);
$presto = mysqli_fetch_assoc($query);

//jika data yang di edit tidak ditemukan
if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link rel="stylesheet" type="text/css" href="../css/formtambah.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/uprofile.css">
    <link rel="stylesheet" type="text/css" href="../css/formedit.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<header>
        <div class="prof">
            <ul>
                <li>
                    <h4 class="uy">User</h4>
                    <p><ion-icon name="people-outline"></ion-icon></p> 
                    <ul class="down">
                        <li><a href="profile.php"><ion-icon name="person-circle-outline"></ion-icon>&nbsp;&nbsp;PROFILE</a></li><br><br>
                        <li><a href="../index.php"><ion-icon name="log-out-outline"></ion-icon>&nbsp;&nbsp;LOGOUT</a></li>
                    </ul>
                </li>
            </ul>
        </div>
	</header>
    <h1>EDIT PROFILE</h1>
    <div class="cocon">
    <form action="prosesedit.php" method="post">
        <p>
			<label for="ID">ID :  </label><br>
			<input type="text" name="ID" placeholder="Masukkan ID" value="<?php echo $presto['ID'] ?>" />
            <hr>
		</p>
        <p>
			<label for="NAMA">NAMA : </label><br>
			<input type="text" name="NAMA" value="<?php echo $presto['NAMA'] ?>" />
            <hr>
		</p>
        <p>
			<label for="ALAMAT">ALAMAT : </label><br>
			<input class="oonnee" type="text" name="ALAMAT"  value="<?php echo $presto['ALAMAT'] ?>"></input>
            <hr>
		</p>
        <p>
			<label for="NOTELFON">NO TELEFON : </label><br>
			<input type="number" name="NOTELFON"  value="<?php echo $presto['NOTELFON'] ?>"/>
            <hr>
		</p>
        
        <p>
			<input class="submit" type="submit" value="Simpan" name="simpan" />
		</p>
    </form>
    </div>
</body>
</html>