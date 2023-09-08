<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/tmenu.css">
    <title>TAMBAH PROFILE</title>
</head>
<body>
    <div class="container">
    <h1>TAMBAH MENU</h1>
    <form action="proses-tambah.php" method="post">
        <div class="onne">
            <p>
				<label for="ID">ID :  </label><br>
				<input class="put" type="text" name="ID" placeholder="Masukkan ID"/>
                <hr>
			</p>
            <p>
				<label for="NAMA">NAMA : </label><br>
                <input class="put" type="text" name="NAMA" placeholder="Masukkan nama menu"/>
                <hr>
			</p>
            <p>
				<label for="DESKRIPSI">DESKRIPSI : </label><br>
				<input class="put" type="text" name="DESKRIPSI" placeholder="Masukkan deskripsi"></input>
                <hr>
			</p>
            <p>
				<label for="HARGA">HARGA : </label><br>
				<input class="put" type="number" name="HARGA" placeholder="Masukkan harga"/>
                <hr>
			</p>
            
        </div>
            <p>
				<input class="submit" type="submit" value="TAMBAHKAN" name="daftar"/>
			</p>
    </form>
    </div>
</body>
</html>