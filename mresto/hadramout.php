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
    <title>HADRAMOUT</title>
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
            <img src="../img/hadramoutlogo.png">
            <h2>
            <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test11)){
                        echo "$presto[1]";
                    }
                ?>
            </h2>
        </div>
        <div class="konten">
            <p class="tu">Hadramout adalah restoran keluarga yang menawarkan berbagai macam makanan dan minuman seperti chicken cordon bleu, nasi goreng teri medan, kwetiau siram ayam, nasi ayam goreng mentega dan masih banyak menu lainnya.</p>
            <p class="to">
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test11)){
                        echo "$presto[2]";
                    }
                ?>
            </p>
        </div>
        <div class="kontak">
            <ul>
                <li>Twitter : @MandalaID</li>
                <li>FB : Mandala_indonesia</li>
                <li>Email : MandalaID@gmail.com</li>
                <li>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test11)){
                        echo "$presto[3]";
                    }
                ?>
                </li>
            </ul>
        </div>
    </div>


    <div class="foto">
    <div class="gallery">
            <a target="_blank" href="../img/hadramout/satu.png">
                <img src="../img/hadramout/satu.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">HUMMUS</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/hadramout/dua.png">
                <img src="../img/hadramout/dua.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">BABA GHANOUS</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/hadramout/tiga.png">
            <img src="../img/hadramout/tiga.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">TABBOULEH</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/hadramout/empat.png">
                <img src="../img/hadramout/empat.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">FATTOUSH</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/hadramout/lima.png">
                <img src="../img/hadramout/lima.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">HOUSE SALAD</div>
        </div>
    </div>

    <div class="foto2">
    <div class="gallery">
            <a target="_blank" href="../img/hadramout/enam.png">
                <img src="../img/hadramout/enam.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">SAMBUSA</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/hadramout/tujuh.png">
                <img src="../img/hadramout/tujuh.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">YOUGURT AND CUCUMBER</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/hadramout/delapan.png">
            <img src="../img/hadramout/delapan.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">FASOLIA</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/hadramout/sembilan.png">
                <img src="../img/hadramout/sembilan.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">FUL</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/hadramout/sepuluh.png">
                <img src="../img/hadramout/sepuluh.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">FRENCH FRIES FALAFEL</div>
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

            $sql = "SELECT * FROM hadramout";
            $query = mysqli_query($db, $sql);
            while($hadramout = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$hadramout['ID']."</td>";
            echo "<td>".$hadramout['NAMA']."</td>";
            echo "<td>".$hadramout['DESKRIPSI']."</td>";
            echo "<td> Rp. ".$hadramout['HARGA']."</td>";
            echo "</tr>";
            }   

        ?>
		</tbody>
	</table>
    </div>

    <div class="pemesanan">
        <h2>FORM PEMESANAN</h2>
        <form action="proses-tambah7.php" method="post">
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
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout1)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout1)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout2)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout2)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout3)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout3)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout4)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout4)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout5)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout5)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout6)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout6)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout7)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout7)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout8)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout8)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout9)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout9)){
                    echo "$hadramout[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM hadramout";
                    $query = mysqli_query($db, $sql);
                    while($hadramout = mysqli_fetch_array($hadramout10)){
                        echo "$hadramout[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM hadramout";
                $query = mysqli_query($db, $sql);
                while($hadramout = mysqli_fetch_array($hadramout10)){
                    echo "$hadramout[1]";
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