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
    <title>MANDALA</title>
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
            <img src="../img/mandalalogo.png">
            <h2>
            <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test3)){
                        echo "$presto[1]";
                    }
                ?>
            </h2>
        </div>
        <div class="konten">
            <p class="tu">Mandala adalah restoran keluarga yang menawarkan berbagai macam makanan dan minuman seperti chicken cordon bleu, nasi goreng teri medan, kwetiau siram ayam, nasi ayam goreng mentega dan masih banyak menu lainnya.</p>
            <p class="to">
                <?php
                    include("../admin/config.php");
                    $sql = "SELECT * FROM presto";
                    $query = mysqli_query($db, $sql);
                    while($presto = mysqli_fetch_array($test3)){
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
                    while($presto = mysqli_fetch_array($test3)){
                        echo "$presto[3]";
                    }
                ?>
                </li>
            </ul>
        </div>
    </div>


    <div class="foto">
    <div class="gallery">
            <a target="_blank" href="../img/mandala/satu.png">
                <img src="../img/mandala/satu.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">AYAM GORENG TEPUNG</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/mandala/dua.png">
                <img src="../img/mandala/dua.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">AYAM NANKING</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/mandala/tiga.png">
            <img src="../img/mandala/tiga.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">AYAM KLUYUK</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/mandala/empat.png">
                <img src="../img/mandala/empat.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">GURAME BAKAR</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/mandala/lima.png">
                <img src="../img/mandala/lima.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">CUMI SAOS MENTEGA</div>
        </div>
    </div>

    <div class="foto2">
    <div class="gallery">
            <a target="_blank" href="../img/mandala/enam.png">
                <img src="../img/mandala/enam.png" alt="gambar.1" width="600" height="400">
            </a>
            <div class="desc">KEPITING SAOS TIRAM</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/mandala/tujuh.png">
                <img src="../img/mandala/tujuh.png" alt="gambar.2" width="600" height="400">
            </a>
            <div class="desc">KAKAP GORENG TEPUNG</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/mandala/delapan.png">
            <img src="../img/mandala/delapan.png" alt="gambar.3" width="600" height="400">
            </a>
            <div class="desc">UDANG ASAM MANIS</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="../img/mandala/sembilan.png">
                <img src="../img/mandala/sembilan.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">CAH KANGKUNG</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="../img/mandala/sepuluh.png">
                <img src="../img/mandala/sepuluh.png" alt="gambar.4" width="600" height="400">
            </a>
            <div class="desc">TUMIS TOGE</div>
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

            $sql = "SELECT * FROM mandala";
            $query = mysqli_query($db, $sql);
            while($mandala = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mandala['ID']."</td>";
            echo "<td>".$mandala['NAMA']."</td>";
            echo "<td>".$mandala['DESKRIPSI']."</td>";
            echo "<td> Rp. ".$mandala['HARGA']."</td>";
            echo "</tr>";
            }   

        ?>
		</tbody>
	</table>
    </div>

    <div class="pemesanan">
        <h2>FORM PEMESANAN</h2>
        <form action="proses-tambah4.php" method="post">
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
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala1)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala1)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala2)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala2)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala3)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala3)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala4)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala4)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala5)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala5)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala6)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala6)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala7)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala7)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala8)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala8)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala9)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala9)){
                    echo "$mandala[1]";
                }
            ?></option>
            <option name="menu1" value="<?php
                    include("../config.php");
                    $sql = "SELECT * FROM mandala";
                    $query = mysqli_query($db, $sql);
                    while($mandala = mysqli_fetch_array($mandala10)){
                        echo "$mandala[1]";
                    }
                ?>"><?php
                include("../config.php");
                $sql = "SELECT * FROM mandala";
                $query = mysqli_query($db, $sql);
                while($mandala = mysqli_fetch_array($mandala10)){
                    echo "$mandala[1]";
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