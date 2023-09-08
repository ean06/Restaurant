<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/nota.css">
    <title>NOTA</title>
</head>
<body>
    <div class="container">
        <h1>NOTA</h1>
        <div class="isi">
            <h3 class="tg">Tanggal :
                <?php
                    include("../config.php");
                    $sql = "SELECT * FROM pesanabuba";
                    $query = mysqli_query($db, $sql);
                    while($pemesanan = mysqli_fetch_array($test2)){
                        echo "$pemesanan[4]";
                    }
                ?>
            </h3><br>
            <h3 class="fr">PEMESANAN</h3>
            <h3 class="resto">
                <?php
                    include("../../admin/config.php");
                    $sql = "SELECT * FROM pesanabuba";
                    $query = mysqli_query($db, $sql);
                    while($pemesanan = mysqli_fetch_array($test4)){
                        echo "$pemesanan[1]";
                    }
                ?>
            </h3>
            <table>
                <thead>
                    <th>MENU</th>
                    <th>QUANTITY</th>
                    <th>SUB TOTAL</th>
                </thead>
                <tbody>
                <?php 
                    include("../config.php");
                    $sql = "SELECT * FROM pesanabuba";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test2)){
                    echo "<tr>";

                    echo "<td>".$solaria['MENU']."</td>";
                    echo "<td>".$solaria['JUMLAH']."</td>";
                    echo "<td> Rp. ".$solaria['SUBTOTAL']."</td>";
                    echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
            <p class="ongkir">PENGIRIMAN  &nbsp;&nbsp; &nbsp; &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;    Rp.15000</p>
            <p class="ongkir">CATATAN :
                <?php
                        include("../config.php");
                        $sql = "SELECT * FROM pesanabuba";
                        $query = mysqli_query($db, $sql);
                        while($pemesanan = mysqli_fetch_array($test2)){
                        echo "$pemesanan[7]";
                        }
                    ?>
            </p>
            <hr class="ok">
            

            <div class="harga">
                <ul>
                    <li>Subtotal Pemesanan</li>
                    <li class="oi">Rp.
                    <?php
                        include("../config.php");
                        $sql = "SELECT * FROM pesanabuba";
                        $query = mysqli_query($db, $sql);
                        while($pemesanan = mysqli_fetch_array($test2)){
                        echo "$pemesanan[9]";
                        }
                    ?>
                    </li>
                </ul>
                <ul>
                    <li>Ongkos kirim</li>
                    <li class="ot">Rp.15000</li>
                </ul>
                <ul>
                    <li>Total pembayaran</li>
                    <li class="or">Rp.
                    <?php
                        include("../config.php");
                        $sql = "SELECT * FROM pesanabuba";
                        $query = mysqli_query($db, $sql);
                        while($pemesanan = mysqli_fetch_array($test2)){
                        echo "$pemesanan[10]";
                        }
                    ?>
                    </li>
                </ul>
            </div>
        </div>
        <img src="../../img/bifood.png">
        <a href="../opsi/opsiabuba.php"><button>OKE</button></a>
    </div>
</body>
</html>