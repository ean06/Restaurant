<?php include("../../config.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST USER</title>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="../../resto/style.css">

</head>
<body>
    <h1>DATA PEMESANAN</h1>
    <center><h2>KIKUGAWA</h2></center>
    <br><br><br>

    <table>
		<thead>
			<tr>
				<th>ID</th>
				<th>RESTO</th>
				<th>NAMA</th>
                <th>ALAMAT</th>
                <th>TANGGAL</th>
				<th>MENU</th>
                <th>QTY</th>
				<th>CATATAN</th>
                <th>PEMBAYARAN</th>
                <th>SUBTOTAL</th>
				<th>TOTAL</th>
			</tr>
		</thead>
		<tbody>
			<?php 

				$sql = "SELECT * FROM pesankikugawa";
				$query = mysqli_query($db, $sql);
				while($pesankikugawa = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesankikugawa['ID']."</td>";
					echo "<td>".$pesankikugawa['RESTO']."</td>";
					echo "<td>".$pesankikugawa['NAMA']."</td>";
					echo "<td>".$pesankikugawa['ALAMAT']."</td>";
					echo "<td>".$pesankikugawa['TANGGAL']."</td>";
					echo "<td>".$pesankikugawa['MENU']."</td>";
                    echo "<td>".$pesankikugawa['JUMLAH']."</td>";
					echo "<td>".$pesankikugawa['CATATAN']."</td>";
					echo "<td>".$pesankikugawa['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesankikugawa['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesankikugawa['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>
	<p>TOTAL: <?php echo mysqli_num_rows($query) ?></p>
	<a href="../listriwayat.php"><button>BACK</button></a>
</body>
</html>
</body>
</html>