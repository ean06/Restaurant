<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH PROFILE</title>
    <link rel="stylesheet" type="text/css" href="../css/formtambah.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/uprofile.css">
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
    <h1>ISI PROFILE</h1>
    <img src="../img/profile.png">
    <form action="proses-tambah.php" method="post">
        <div class="onne">
            <h2>DETAILS</h2><br>
            <p>
				<label for="ID">ID :  </label><br>
				<input class="oonnee" type="text" name="ID" placeholder="Masukkan ID"/>
                <hr>
			</p>
            <p>
				<label for="NAMA">NAMA : </label><br>
                <input class="oonnee" type="text" name="NAMA" placeholder="Masukkan nama lengkap"/>
                <hr>
			</p>
            <p>
				<label for="ALAMAT">ALAMAT : </label><br>
				<input class="oonnee" type="text" name="ALAMAT" placeholder="Masukkan nama lengkap"></input>
                <hr>
			</p>
            <p>
				<label for="GENDER">JENIS KELAMIN : </label><br>
				<label><input class="tutu" type="radio" name="GENDER" value="Pria"/>PRIA</label><br>
				<label><input class="tutu" type="radio" name="GENDER" value="Wanita"/>WANITA</label>
			</p>
            <p>
				<label for="NOTELFON">NO TELEFON : </label><br>
				<input type="number" name="NOTELFON" placeholder="Masukkan No telepon"/>
                <hr>
			</p>
            <p>
				<label for="PLATNO">NO POLISI : </label><br>
				<input type="text" name="PLATNO" placeholder="Masukkan No telepon"/>
                <hr>
			</p>
            
        </div>
            <p>
				<input class="submit" type="submit" value="TAMBAHKAN" name="daftar"/>
			</p>
    </form>
</body>
</html>