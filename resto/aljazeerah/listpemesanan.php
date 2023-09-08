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
    <link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body>
    <h1>DATA PEMESANAN</h1>

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

				$sql = "SELECT * FROM pesanaljazeerah";
				$query = mysqli_query($db, $sql);
				while($pesanaljazeerah = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanaljazeerah['ID']."</td>";
					echo "<td>".$pesanaljazeerah['RESTO']."</td>";
					echo "<td>".$pesanaljazeerah['NAMA']."</td>";
					echo "<td>".$pesanaljazeerah['ALAMAT']."</td>";
					echo "<td>".$pesanaljazeerah['TANGGAL']."</td>";
					echo "<td>".$pesanaljazeerah['MENU']."</td>";
                    echo "<td>".$pesanaljazeerah['JUMLAH']."</td>";
					echo "<td>".$pesanaljazeerah['CATATAN']."</td>";
					echo "<td>".$pesanaljazeerah['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanaljazeerah['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanaljazeerah['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>
	<p>TOTAL: <?php echo mysqli_num_rows($query) ?></p>
	<a href="../aljazeerah.php"><button>BACK</button></a>
</body>
</html>
</body>
</html>