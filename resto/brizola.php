
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/uprofile.css">
    <link rel="stylesheet" type="text/css" href="../css/menuprof.css">
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
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test5)){
                        echo "$presto[1]";
                    }
                    ?>
                    </h4>
                    <p><ion-icon name="people-outline"></ion-icon></p> 
                    <ul class="down">
                        <li><a href="#"><ion-icon name="person-circle-outline"></ion-icon>&nbsp;&nbsp;HOME</a></li><br><br>
                        <li><a href="../index.php"><ion-icon name="log-out-outline"></ion-icon>&nbsp;&nbsp;LOGOUT</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php while($presto = mysqli_fetch_array($test5)) ?>
    </header>
    <div class="container">
        <h1>USER PROFILE</h1>
        <div class="abc">
            <img src="../img/profile.png">
            <h3>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test5)){
                        echo "$presto[1]";
                    }
                ?>
            </h3><br>
            <a href="brizola/listpemesanan.php">Riwayat pemesanan</a><br>
            <a href="../admin/listuser.php">Edit profile</a>
        </div>
        <div class="efg">
            <h2>DETAILS</h2>
            <h3>NAMA</h3>
            <p>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test5)){
                        echo "$presto[1]";
                    }
                ?>
            </p>
            <h3>ADDRESS</h3>
            <p>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test5)){
                        echo "$presto[2]";
                    }
                ?>
            </p>
            <h3>KATEGORI</h3>
            <p>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test5)){
                        echo "$presto[4]";
                    }
                ?>
            </p>
        </div>
        <div class="hij">
            <h2>CONTACT</h2>
            
            <h3>NO TELFON</h3>
            <p>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test5)){
                        echo "$presto[3]";
                    }
                ?>
            </p>
        </div>
    </div>

    <div class="menu">
    <h1>DATA MENU</h1>
    <nav>
		<a href="brizola/form_tambah.php"><ion-icon name="person-add-outline"></ion-icon></a>
	</nav>

    <table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>DESKRIPSI</th>
				<th>HARGA</th>	
			</tr>
		</thead>
		<tbody>
			<?php 

				$sql = "SELECT * FROM brizola";
				$query = mysqli_query($db, $sql);
				while($brizola = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$brizola['ID']."</td>";
					echo "<td>".$brizola['NAMA']."</td>";
					echo "<td>".$brizola['DESKRIPSI']."</td>";
					echo "<td> Rp. ".$brizola['HARGA']."</td>";
                    echo "<td>";
					echo "<a href='brizola/form_edit.php?ID=".$brizola['ID']."'>Edit</a>";
                    echo "<a href='brizola/hapus.php?ID=".$brizola['ID']."' onClick=\"return confirm('yakin?');\">Hapus</a>";
					echo "</tr>";
				}

			?>
		</tbody>
	</table>
	<p class="total">TOTAL: <?php echo mysqli_num_rows($query) ?></p>
    </div>

</body>
</html>