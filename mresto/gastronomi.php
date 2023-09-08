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
    <title>GASTRONOMI</title>
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
            <img src="../img/gastronomilogo.png">
            <h2>
            <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test2)){
                        echo "$presto[1]";
                    }
                ?>
            </h2>
        </div>
        <div class="konten">
            <p class="tu">Gastronomi adalah restoran keluarga yang menawarkan berbagai macam makanan dan minuman seperti chicken cordon bleu, nasi goreng teri medan, kwetiau siram ayam, nasi ayam goreng mentega dan masih banyak menu lainnya.</p>
            <p class="to">
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test2)){
                        echo "$presto[2]";
                    }
                ?>
            </p>
        </div>
        <div class="kontak">
            <ul>
                <li>Twitter : @GastID</li>
                <li>FB : Gast_indonesia</li>
                <li>Email : GastronomiID@gmail.com</li>
                <li>
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test2)){
                        echo "$presto[3]";
                    }
                ?>
                </li>
            </ul>
        </div>
    </div>


    <div class="foto">
    <div class="gallery">
            <a target="_blank" href="../img/gastronomi/satu.png">
                <img src="../img/gastronomi/satu.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">NASI PUTIH</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/gastronomi/dua.png">
                <img src="../img/gastronomi/dua.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">NASI TIMBEL</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/gastronomi/tiga.png">
            <img src="../img/gastronomi/tiga.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">OPOR AYAM</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/gastronomi/empat.png">
                <img src="../img/gastronomi/empat.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">REBEG KAMBING</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/gastronomi/lima.png">
                <img src="../img/gastronomi/lima.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">MIE ACEH</div>
        </div>
    </div>

    <div class="foto2">
    <div class="gallery">
            <a target="_blank" href="../img/gastronomi/enam.png">
                <img src="../img/gastronomi/enam.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">AYAM SELIMUT</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/gastronomi/tujuh.png">
                <img src="../img/gastronomi/tujuh.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">ES CAMPUR</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/gastronomi/delapan.png">
            <img src="../img/gastronomi/delapan.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">AYAM RICA-RICA</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/gastronomi/sembilan.png">
                <img src="../img/gastronomi/sembilan.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">AYAM BAKAR</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/gastronomi/sepuluh.png">
                <img src="../img/gastronomi/sepuluh.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">AYAM GORENG</div>
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

            $sql = "SELECT * FROM gastronomi";
            $query = mysqli_query($db, $sql);
            while($gastronomi = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$gastronomi['ID']."</td>";
            echo "<td>".$gastronomi['NAMA']."</td>";
            echo "<td>".$gastronomi['DESKRIPSI']."</td>";
            echo "<td> Rp. ".$gastronomi['HARGA']."</td>";
            echo "</tr>";
            }

        ?>
		</tbody>
	</table>
    </div>


    <div class="pemesanan">
        <h2>FORM PEMESANAN</h2>
        <form action="proses-tambah3.php" method="post">
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
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi1)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi1)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi2)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi2)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi3)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi3)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi4)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi4)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi5)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi5)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi6)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi6)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi7)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi7)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi8)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi8)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi9)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi9)){
                    echo "$gastronomi[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM gastronomi";
                    $query = mysqli_query($db, $sql);
                    while($gastronomi = mysqli_fetch_array($gastronomi10)){
                        echo "$gastronomi[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM gastronomi";
                $query = mysqli_query($db, $sql);
                while($gastronomi = mysqli_fetch_array($gastronomi10)){
                    echo "$gastronomi[1]";
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