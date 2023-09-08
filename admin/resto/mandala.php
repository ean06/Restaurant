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
    <center><h2>MANDALA</h2></center>
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

				$sql = "SELECT * FROM pesanmandala";
				$query = mysqli_query($db, $sql);
				while($pesanmandala = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanmandala['ID']."</td>";
					echo "<td>".$pesanmandala['RESTO']."</td>";
					echo "<td>".$pesanmandala['NAMA']."</td>";
					echo "<td>".$pesanmandala['ALAMAT']."</td>";
					echo "<td>".$pesanmandala['TANGGAL']."</td>";
					echo "<td>".$pesanmandala['MENU']."</td>";
                    echo "<td>".$pesanmandala['JUMLAH']."</td>";
					echo "<td>".$pesanmandala['CATATAN']."</td>";
					echo "<td>".$pesanmandala['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanmandala['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanmandala['TOTAL']."</td>";

					

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