<?php
include("../config.php");

if(!isset($_GET['ID'])){
    header('Location: ../altahrir.php');
}

// buat query untuk ambil data dari database
$sql = "SELECT * FROM altahrir WHERE ID='$_GET[ID]'";
$query = mysqli_query($db, $sql);
$altahrir = mysqli_fetch_assoc($query);

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
    <link rel="stylesheet" type="text/css" href="../../css/tmenu.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
    <h1>EDIT PROFILE</h1>
    <div class="onne">
    <form action="prosesedit.php" method="post">
        <p>
			<label for="ID">ID :  </label><br>
			<input class="put" type="text" name="ID" placeholder="Masukkan ID" value="<?php echo $altahrir['ID'] ?>" />
            <hr>
		</p>
        <p>
			<label for="NAMA">NAMA : </label><br>
			<input class="put" type="text" name="NAMA" value="<?php echo $altahrir['NAMA'] ?>" />
            <hr>
		</p>
        <p>
			<label for="DESKRIPSI">DESKRIPSI : </label><br>
			<input class="put" type="text" name="DESKRIPSI"  value="<?php echo $altahrir['DESKRIPSI'] ?>"></input>
            <hr>
		</p>
        <p>
			<label for="HARGA">HARGA : </label><br>
			<input class="put" type="number" name="HARGA"  value="<?php echo $altahrir['HARGA'] ?>"/>
            <hr>
		</p>
        
        <p>
			<input class="Submit" type="submit" value="Simpan" name="simpan" />
		</p>
    </form>
    </div>
    </div>
</body>
</html>