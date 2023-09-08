<?php include("../config.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST USER</title>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="../resto/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h1>DATA PEMESANAN</h1>
    <br>
    <br>
    <a href="resto/solaria.php"><center><h2>SOLARIA</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pemesananmakanan";
				$query = mysqli_query($db, $sql);
				while($pemesananmakanan = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pemesananmakanan['ID']."</td>";
					echo "<td>".$pemesananmakanan['RESTO']."</td>";
					echo "<td>".$pemesananmakanan['NAMA']."</td>";
					echo "<td>".$pemesananmakanan['ALAMAT']."</td>";
					echo "<td>".$pemesananmakanan['TANGGAL']."</td>";
					echo "<td>".$pemesananmakanan['MENU']."</td>";
                    echo "<td>".$pemesananmakanan['JUMLAH']."</td>";
					echo "<td>".$pemesananmakanan['CATATAN']."</td>";
					echo "<td>".$pemesananmakanan['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pemesananmakanan['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pemesananmakanan['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>

    <br>
    <a href="resto/gastronomi.php"><center><h2>GASTRONOMI</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pesangastronomi";
				$query = mysqli_query($db, $sql);
				while($pesangastronomi = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesangastronomi['ID']."</td>";
					echo "<td>".$pesangastronomi['RESTO']."</td>";
					echo "<td>".$pesangastronomi['NAMA']."</td>";
					echo "<td>".$pesangastronomi['ALAMAT']."</td>";
					echo "<td>".$pesangastronomi['TANGGAL']."</td>";
					echo "<td>".$pesangastronomi['MENU']."</td>";
                    echo "<td>".$pesangastronomi['JUMLAH']."</td>";
					echo "<td>".$pesangastronomi['CATATAN']."</td>";
					echo "<td>".$pesangastronomi['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesangastronomi['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesangastronomi['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>

    <br>
    <a href="resto/mandala.php"><center><h2>MANDALA</h2></center></a>
    <br>
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

    <br>
    <a href="resto/abuba.php"><center><h2>ABUBA</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pesanabuba";
				$query = mysqli_query($db, $sql);
				while($pesanabuba = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanabuba['ID']."</td>";
					echo "<td>".$pesanabuba['RESTO']."</td>";
					echo "<td>".$pesanabuba['NAMA']."</td>";
					echo "<td>".$pesanabuba['ALAMAT']."</td>";
					echo "<td>".$pesanabuba['TANGGAL']."</td>";
					echo "<td>".$pesanabuba['MENU']."</td>";
                    echo "<td>".$pesanabuba['JUMLAH']."</td>";
					echo "<td>".$pesanabuba['CATATAN']."</td>";
					echo "<td>".$pesanabuba['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanabuba['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanabuba['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>

    <br>
    <a href="resto/brizola.php"><center><h2>BRIZOLA</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pesanbrizola";
				$query = mysqli_query($db, $sql);
				while($pesanbrizola = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanbrizola['ID']."</td>";
					echo "<td>".$pesanbrizola['RESTO']."</td>";
					echo "<td>".$pesanbrizola['NAMA']."</td>";
					echo "<td>".$pesanbrizola['ALAMAT']."</td>";
					echo "<td>".$pesanbrizola['TANGGAL']."</td>";
					echo "<td>".$pesanbrizola['MENU']."</td>";
                    echo "<td>".$pesanbrizola['JUMLAH']."</td>";
					echo "<td>".$pesanbrizola['CATATAN']."</td>";
					echo "<td>".$pesanbrizola['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanbrizola['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanbrizola['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>


    <br>
    <a href="resto/zoku.php"><center><h2>ZOKU</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pesanzoku";
				$query = mysqli_query($db, $sql);
				while($pesanzoku = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanzoku['ID']."</td>";
					echo "<td>".$pesanzoku['RESTO']."</td>";
					echo "<td>".$pesanzoku['NAMA']."</td>";
					echo "<td>".$pesanzoku['ALAMAT']."</td>";
					echo "<td>".$pesanzoku['TANGGAL']."</td>";
					echo "<td>".$pesanzoku['MENU']."</td>";
                    echo "<td>".$pesanzoku['JUMLAH']."</td>";
					echo "<td>".$pesanzoku['CATATAN']."</td>";
					echo "<td>".$pesanzoku['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanzoku['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanzoku['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>

    <br>
    <a href="resto/oniquaer.php"><center><h2>ONIQUAER</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pesanoniquaer";
				$query = mysqli_query($db, $sql);
				while($pesanoniquaer = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanoniquaer['ID']."</td>";
					echo "<td>".$pesanoniquaer['RESTO']."</td>";
					echo "<td>".$pesanoniquaer['NAMA']."</td>";
					echo "<td>".$pesanoniquaer['ALAMAT']."</td>";
					echo "<td>".$pesanoniquaer['TANGGAL']."</td>";
					echo "<td>".$pesanoniquaer['MENU']."</td>";
                    echo "<td>".$pesanoniquaer['JUMLAH']."</td>";
					echo "<td>".$pesanoniquaer['CATATAN']."</td>";
					echo "<td>".$pesanoniquaer['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanoniquaer['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanoniquaer['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>

    <br>
    <a href="resto/kikugawa.php"><center><h2>KIKUGAWA</h2></center></a>
    <br>
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

    <br>
    <a href="resto/marufuku.php"><center><h2>MARUFUKU</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pesanmarufuku";
				$query = mysqli_query($db, $sql);
				while($pesanmarufuku = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanmarufuku['ID']."</td>";
					echo "<td>".$pesanmarufuku['RESTO']."</td>";
					echo "<td>".$pesanmarufuku['NAMA']."</td>";
					echo "<td>".$pesanmarufuku['ALAMAT']."</td>";
					echo "<td>".$pesanmarufuku['TANGGAL']."</td>";
					echo "<td>".$pesanmarufuku['MENU']."</td>";
                    echo "<td>".$pesanmarufuku['JUMLAH']."</td>";
					echo "<td>".$pesanmarufuku['CATATAN']."</td>";
					echo "<td>".$pesanmarufuku['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanmarufuku['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanmarufuku['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>

    <br>
    <a href="resto/aljazeerah.php"><center><h2>AL-JAZEERAH SIGNATURE</h2></center></a>
    <br>
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

    <br>
    <a href="resto/hadramout.php"><center><h2>HADRAMOUT RESTAURANT</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pesanhadramout";
				$query = mysqli_query($db, $sql);
				while($pesanhadramout = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanhadramout['ID']."</td>";
					echo "<td>".$pesanhadramout['RESTO']."</td>";
					echo "<td>".$pesanhadramout['NAMA']."</td>";
					echo "<td>".$pesanhadramout['ALAMAT']."</td>";
					echo "<td>".$pesanhadramout['TANGGAL']."</td>";
					echo "<td>".$pesanhadramout['MENU']."</td>";
                    echo "<td>".$pesanhadramout['JUMLAH']."</td>";
					echo "<td>".$pesanhadramout['CATATAN']."</td>";
					echo "<td>".$pesanhadramout['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanhadramout['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanhadramout['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>

    <br>
    <a href="resto/altahrir.php"><center><h2>AL-TAHRIR</h2></center></a>
    <br>
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

				$sql = "SELECT * FROM pesanaltahrir";
				$query = mysqli_query($db, $sql);
				while($pesanaltahrir = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$pesanaltahrir['ID']."</td>";
					echo "<td>".$pesanaltahrir['RESTO']."</td>";
					echo "<td>".$pesanaltahrir['NAMA']."</td>";
					echo "<td>".$pesanaltahrir['ALAMAT']."</td>";
					echo "<td>".$pesanaltahrir['TANGGAL']."</td>";
					echo "<td>".$pesanaltahrir['MENU']."</td>";
                    echo "<td>".$pesanaltahrir['JUMLAH']."</td>";
					echo "<td>".$pesanaltahrir['CATATAN']."</td>";
					echo "<td>".$pesanaltahrir['PEMBAYARAN']."</td>";
					echo "<td> Rp. ".$pesanaltahrir['SUBTOTAL']."</td>";
					echo "<td> Rp. ".$pesanaltahrir['TOTAL']."</td>";

					

					echo "</tr>";
				}

			?>
		</tbody>
	</table>

	
	<a class="back" href="index.php"><button>BACK</button></a>
</body>
</html>
</body>
</html>