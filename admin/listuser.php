<?php include("config.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST RESTO</title>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/listuser.css">
</head>
<body>
    <h1>DATA RESTO</h1>
    <nav>
		<a href="form_tambah.php"><ion-icon name="person-add-outline"></ion-icon></a>
	</nav>

    <table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No.Telp</th>
                <th>Kategori</th>
                
				
			</tr>
		</thead>
		<tbody>
			<?php 

				$sql = "SELECT * FROM presto";
				$query = mysqli_query($db, $sql);
				while($presto = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$presto['ID']."</td>";
					echo "<td>".$presto['NAMA']."</td>";
					echo "<td>".$presto['ALAMAT']."</td>";
					echo "<td>".$presto['NOTELFON']."</td>";
					echo "<td>".$presto['KATEGORI']."</td>";

					echo "<td>";
					echo "<a href='formedit.php?ID=".$presto['ID']."'>Edit</a>";
                    echo "<a href='hapus.php?ID=".$presto['ID']."' onClick=\"return confirm('yakin?');\">Hapus</a>";

					echo "</tr>";
				}

			?>
		</tbody>
	</table>
	<p>TOTAL: <?php echo mysqli_num_rows($query) ?></p>
	<a href="../admin/index.php"><button>BACK</button></a>
</body>
</html>
</body>
</html>