<?php

include("driver/config.php");
$query = mysql_query("SELECT NAMA FROM pdriver ORDER BY RAND()") or die ("Invalid Query !!!");

    while($hasil=mysql_fetch_array($query))
    {   //Tampilkan hasilnya secara acak dan link ke lihat_artikel.php berdasarkan id masng-masing artikel
        echo $hasil;
    }
?>
