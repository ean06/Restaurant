<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/uprofile.css">
    <link rel="stylesheet" type="text/css" href="../css/mresto.css">
    <link rel="stylesheet" type="text/css" href="../css/menuprof.css">
    <link rel="stylesheet" type="text/css" href="../css/gallery.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>SOLARIA</title>
</head>
<body>
<header>
        <div class="prof">
            <ul>
                <li>
                    <h4 class="uy">
                    <?php
                    include("../config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[1]";
                    }
                    ?>
                    </h4>
                    <p><ion-icon name="people-outline"></ion-icon></p> 
                    <ul class="down">
                        <li><a href="../profile.php"><ion-icon name="person-circle-outline"></ion-icon>&nbsp;&nbsp;PROFILE</a></li><br><br>
                        <li><a href="../home.php"><ion-icon name="log-out-outline"></ion-icon>&nbsp;&nbsp;HOME</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php while($userprofile = mysqli_fetch_array($test)) ?>
    </header>

    <div class="container">
        <div class="gambar">
            <img src="../img/solarialogo.png">
            <h2>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test1)){
                        echo "$presto[1]";
                    }
                ?>
            </h2>
        </div>
        <div class="konten">
            <p class="tu">Solaria adalah restoran keluarga yang menawarkan berbagai macam makanan dan minuman seperti chicken cordon bleu, nasi goreng teri medan, kwetiau siram ayam, nasi ayam goreng mentega dan masih banyak menu lainnya.</p>
            <p class="to">
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test1)){
                        echo "$presto[2]";
                    }
                ?>
            </p>
        </div>
        <div class="kontak">
            <ul>
                <li>Twitter : @SolariaID</li>
                <li>FB : Solaria_indonesia</li>
                <li>Email : SolariaID@gmail.com</li>
                <li>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test1)){
                        echo "$presto[3]";
                    }
                ?>
                </li>
            </ul>
        </div>
    </div>


    <div class="foto">
    <div class="gallery">
            <a target="_blank" href="../img/solaria/satu.png">
                <img src="../img/solaria/satu.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">NASI GORENG SPECIAL</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/solaria/dua.png">
                <img src="../img/solaria/dua.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">NASI GORENG SEAFOOD</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/solaria/tiga.png">
            <img src="../img/solaria/tiga.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">AYAM GORENG MENTEGA</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/solaria/empat.png">
                <img src="../img/solaria/empat.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">BISTIK AYAM</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/solaria/lima.png">
                <img src="../img/solaria/lima.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">CAPCAY SEAFOOD</div>
        </div>
    </div>

    <div class="foto2">
    <div class="gallery">
            <a target="_blank" href="../img/solaria/enam.png">
                <img src="../img/solaria/enam.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">FRENCH FRIES</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/solaria/tujuh.png">
                <img src="../img/solaria/tujuh.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">FISH CAKE</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/solaria/delapan.png">
            <img src="../img/solaria/delapan.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">NASI PUTIH</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/solaria/sembilan.png">
                <img src="../img/solaria/sembilan.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">NASI SAPI LADA HITAM</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/solaria/sepuluh.png">
                <img src="../img/solaria/sepuluh.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">NASI SAPO TAHU SEAFOOD</div>
        </div>
    </div>





    <div class="menuc">
    <table>
		<thead>
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>DESKRIPSI</th>
				<th>HARGA</th>	
			</tr>
		</thead>
		<tbody>
			<?php 

				$sql = "SELECT * FROM solaria";
				$query = mysqli_query($db, $sql);
				while($solaria = mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$solaria['ID']."</td>";
					echo "<td>".$solaria['NAMA']."</td>";
					echo "<td>".$solaria['DESKRIPSI']."</td>";
					echo "<td> Rp. ".$solaria['HARGA']."</td>";
					echo "</tr>";
				}

			?>
		</tbody>
	</table>
    </div>

    <div class="pemesanan">
        <h2>FORM PEMESANAN</h2>
        <form action="proses-tambah.php" method="post">
            <label for="NAMA">NAMA PENERIMA : </label><br>
            <input class="men" type="text" name="NAMA" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[1]";
                    }
                ?>"><hr>
                
            <label for="ALAMAT">ALAMAT : </label><br>
            <input class="men" type="text" name="ALAMAT" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[2]";
                    }
                ?>"><hr>
            
            <label>TANGGAL :</label>
            <input class="men" type="date" name="TANGGAL">
                

            <label>PILIH MENU</label><br>
            <select class="man" name="menu1">
                <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test1)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test1)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test2)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test2)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test3)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test3)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test4)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test4)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test5)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test5)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test6)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test6)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test7)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test7)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test8)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test8)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test9)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test9)){
                    echo "$solaria[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM solaria";
                    $query = mysqli_query($db, $sql);
                    while($solaria = mysqli_fetch_array($test10)){
                        echo "$solaria[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM solaria";
                $query = mysqli_query($db, $sql);
                while($solaria = mysqli_fetch_array($test10)){
                    echo "$solaria[1]";
                }
            ?></option>
            </select><br>

            <label>QUANTITY :</label><br>
            <input class="men" type="number" name="jmenu1">
            <hr>

            <label>CATATAN</label>
            <input class="men" type="text" name="CATATAN">
            

            <label>METODE PEMBAYARAN</label><br>
            <select class="man" name="metbay">
                <option class="op" value="COD" name="metbay">COD</option>
                <option value="DANA" name="metbay">DANA</option>
                <option value="GOPAY" name="metbay">GOPAY</option>
                <option value="OVO" name="metbay">OVO</option>
            </select>
            <br>
            <a href="test.php"><input type="submit" value="PESAN" name="daftar"></a>
            

        </form>
    </div>

</body>
</html>