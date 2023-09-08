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
    <title>ALJAZEERAH</title>
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
                    while($presto = mysqli_fetch_array($test10)){
                        echo "$presto[1]";
                    }
                ?>
            </h2>
        </div>
        <div class="konten">
            <p class="tu">Zoku adalah restoran keluarga yang menawarkan berbagai macam makanan dan minuman seperti chicken cordon bleu, nasi goreng teri medan, kwetiau siram ayam, nasi ayam goreng mentega dan masih banyak menu lainnya.</p>
            <p class="to">
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test10)){
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
                    while($presto = mysqli_fetch_array($test10)){
                        echo "$presto[3]";
                    }
                ?>
                </li>
            </ul>
        </div>
    </div>


    <div class="foto">
    <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/satu.png">
                <img src="../img/aljazeerah/satu.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">MORROCAN BASTILLA</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/dua.png">
                <img src="../img/aljazeerah/dua.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">ARAYES</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/tiga.png">
            <img src="../img/aljazeerah/tiga.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">SHAWARMA MUSYAKKAL</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/empat.png">
                <img src="../img/aljazeerah/empat.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">FOUL MUDAMMAS</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/lima.png">
                <img src="../img/aljazeerah/lima.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">LENTIL SOUP</div>
        </div>
    </div>

    <div class="foto2">
    <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/enam.png">
                <img src="../img/aljazeerah/enam.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">CORN CREAM SOUP</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/tujuh.png">
                <img src="../img/aljazeerah/tujuh.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">KAWAREH SOUP</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/delapan.png">
            <img src="../img/aljazeerah/delapan.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">CAESAR SALAD</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/sembilan.png">
                <img src="../img/aljazeerah/sembilan.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">ARABIC SALAD</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/aljazeerah/sepuluh.png">
                <img src="../img/aljazeerah/sepuluh.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">FALAFEL SANDWICH</div>
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

            $sql = "SELECT * FROM aljazeerah";
            $query = mysqli_query($db, $sql);
            while($aljazeerah = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$aljazeerah['ID']."</td>";
            echo "<td>".$aljazeerah['NAMA']."</td>";
            echo "<td>".$aljazeerah['DESKRIPSI']."</td>";
            echo "<td> Rp. ".$aljazeerah['HARGA']."</td>";
            echo "</tr>";
            }   

        ?>
		</tbody>
	</table>
    </div>

    <div class="pemesanan">
        <h2>FORM PEMESANAN</h2>
        <form action="proses-tambah12.php" method="post">
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
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah1)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah1)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah2)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah2)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah3)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah3)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah4)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah4)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah5)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah5)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah6)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah6)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah7)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah7)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah8)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah8)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah9)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah9)){
                    echo "$aljazeerah[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM aljazeerah";
                    $query = mysqli_query($db, $sql);
                    while($aljazeerah = mysqli_fetch_array($aljazeerah10)){
                        echo "$aljazeerah[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM aljazeerah";
                $query = mysqli_query($db, $sql);
                while($aljazeerah = mysqli_fetch_array($aljazeerah10)){
                    echo "$aljazeerah[1]";
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