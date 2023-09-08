

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header>
		<h1>BIFOOD</h1>
        <div class="prof">
            <ul>
                <li>
                    <h4 class="uy">
                    <?php
                    include("config.php");
                    $sql = "SELECT * FROM userprofile";
                    $query = mysqli_query($db, $sql);
                    while($userprofile = mysqli_fetch_array($test)){
                        echo "$userprofile[1]";
                    }
                    ?>
                    </h4>
                    <p><ion-icon name="people-outline"></ion-icon></p> 
                    <ul class="down">
                        <li><a href="opsi.php"><ion-icon name="person-circle-outline"></ion-icon>&nbsp;&nbsp;PROFILE</a></li><br><br>
                        <li><a href="index.php"><ion-icon name="log-out-outline"></ion-icon>&nbsp;&nbsp;LOGOUT</a></li>
                    </ul>
                </li>
            </ul>
        </div>
	</header>

    <div class="container">
        <div class="teks">
            <h2>Skip The Diet, <br> Just Eat Healthy <br> With <div class="tes">BiFood</div></h2>
            <p>Imagine you don't need a diet because we provide healthy and delicious food for you</p>
        </div>

        <div class="gambar">
            <img src="img/ikon.png">
        </div>

        <div class="klik">
            <a href="#satu"><button type="submit">ORDER NOW</button></a> 
        </div>
    </div>

    <div class="conn">
        <!-- Slider main container -->
        <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img class="tutu" src="img/banner1.jpg"></div>
        <div class="swiper-slide"><img class="tutu" src="img/banner3.png"></div>
        <div class="swiper-slide"><img class="tutu" src="img/banner2.png"></div>
        
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        </div>
        <script>
            const swiper = new Swiper('.swiper', {
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
            el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
            el: '.swiper-scrollbar',
            },
            });
        </script>
    <!-- STOP -->

    <div id="satu">
        <h1>POPULAR RESTO</h1>
        <ul>
            <li>
                <div class="one">
                    <a href="img/solaria.png" target="_blank"><img src="img/solaria.png"></a>
                    <h3>SOLARIA</h3>
                    <p>we prefer to serve Indonesian food</p>
                    <a href="mresto/solaria.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/abuba.png" target="_blank"><img src="img/abuba.png"></a>
                    
                    <h3>ABUBA</h3>
                    <p>we prefer to serve Western food</p>
                    <a href="mresto/abuba.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/onikuae.png" target="_blank"><img src="img/onikuae.png"></a>
                    <h3>ONIKUAE</h3>
                    <p>we prefer to serve Japanese food</p>
                    <a href="mresto/oniquaer.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
        </ul>
    </div>

    <div id="dua">
    <h2>Indonesian Food</h2>
        <ul>
            <li>
                <div class="one">
                    <a href="img/solaria.png" target="_blank"><img src="img/solaria.png"></a>
                    <h3>SOLARIA</h3>
                    <p>we prefer to serve Indonesian food</p>
                    <a href="mresto/solaria.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/gastronomi.png" target="_blank"><img src="img/gastronomi.png"></a>                   
                    <h3>GASTRONOMI</h3>
                    <p>we prefer to serve Indonesian food</p>
                    <a href="mresto/gastronomi.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/mandala.png" target="_blank"><img src="img/mandala.png"></a>                    
                    <h3>MANDALA</h3>
                    <p>we prefer to serve Indonesian food</p>
                    <a href="mresto/mandala.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
        </ul>
    </div>
    
    <div id="tiga">
    <h2>Western Food</h2>
        <ul>
            <li>
                <div class="one">
                    <a href="img/abuba.png" target="_blank"><img src="img/abuba.png"></a>                    
                    <h3>ABUBA</h3>
                    <p>we prefer to serve Western Food</p>
                    <a href="mresto/abuba.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/Brizola.png" target="_blank"><img src="img/Brizola.png"></a>                    
                    <h3>BRIZOLA</h3>
                    <p>we prefer to serve Western Food</p>
                    <a href="mresto/brizola.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/Zoku.png" target="_blank"><img src="img/Zoku.png"></a>                    
                    <h3>ZOKU</h3>
                    <p>we prefer to serve Western Food</p>
                    <a href="mresto/zoku.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
        </ul>
    </div>

    <div id="empat">
    <h2>Japanese Food</h2>
        <ul>
            <li>
                <div class="one">
                    <a href="img/onikuae.png" target="_blank"><img src="img/onikuae.png"></a>                    
                    <h3>ONIKUAER</h3>
                    <p>we prefer to serve Japanese Food</p>
                    <a href="mresto/oniquaer.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/kikugawa.png" target="_blank"><img src="img/kikugawa.png"></a>                    
                    <h3>KIKUGAWA</h3>
                    <p>we prefer to serve Japanese Food</p>
                    <a href="mresto/kikugawa.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/marufuku.png" target="_blank"><img src="img/marufuku.png"></a>                    
                    <h3>MARUFUKU</h3>
                    <p>we prefer to serve Japanese Food</p>
                    <a href="mresto/marufuku.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
        </ul>
    </div>

    <div id="lima">
    <h2>Middle Eastern Food</h2>
        <ul>
            <li>
                <div class="one">
                    <a href="img/tt1.png" target="_blank"><img src="img/tt1.png"></a>                    
                    <h3>Al JAZEERAH SIGNATURE</h3>
                    <p>we prefer to serve Middle Eastern Food</p>
                    <a href="mresto/aljazeerah.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/tt2.png" target="_blank"><img src="img/tt2.png"></a>                    
                    <h3>HADRAMOUT RESTAURANT</h3>
                    <p>we prefer to serve Middle Eastern Food</p>
                    <a href="mresto/hadramout.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
            <li>
                <div class="one">
                    <a href="img/tt3.png" target="_blank"><img src="img/tt3.png"></a>                    
                    <h3>AL TAHRIR</h3>
                    <p>we prefer to serve Middle Eastern Food</p>
                    <a href="mresto/altahrir.php"><button type="submit">VISIT RESTO</button></a>
                </div>
            </li>
        </ul>
    </div>

    <div class="footer">
        
        <div class="first">
            <h2>Category</h2>
            <ul>
                <li><a href="#satu">Popular Food</a></li>
                <li><a href="#dua">Indonesian Food</a></li>
                <li><a href="#tiga">Western Food</a></li>
                <li><a href="#empat">Japanese Food</a></li>
                <li><a href="#lima">Middle Eastern Food</a></li>
            </ul>
        </div>
        
        <div class="seccond">
            <h2>Connect with us</h2>
            <ul>
                <li><a href="#"><ion-icon class="yuyu" name="call-outline">  </ion-icon></a></li>
                <li><a href="#"><ion-icon class="yuyu" name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon class="yuyu" name="mail-outline"></ion-icon></a></li>
            </ul>
            <ul class="tul">
                <li>21-23498348</li>
                <li>@bifood.official</li>
                <li>bifood.company@gmail.com</li>
            </ul>
        </div>
        <div class="oone">
            <h1>BIFOOD</h1>
            <p>The only company in South Tangerang that has twice been on the Fortune Mitra Food merchants list of World Changing Companies, an 80% increase since the pandemic thanks to Bifood's digitalization solution for MSMEs.</p>
        </div>
        <p class="akhir">© 2022 BiFood BiFood is a tradmark of PT Kelompok 1. Registered in the Directorate General of Intellectual Property of the Republic of Indonesia.</p>
        
    </div>

</div>
<?php if(isset($_GET['status'])): ?>
		<p>
			<?php
				if($_GET['status'] == 'sukses'){
					echo "Inputan Biodata siswa berhasil";
				}else {
					echo"Pendaftaran gagal";
				}
			?>
		</p>
	<?php endif; ?>
</body>
</html>