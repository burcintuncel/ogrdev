<?php
$host      = "localhost";
$kullanici = "root";
$sifre     = "";
$baglanti = mysql_connect( $host, $kullanici, $sifre )
or die("HATA : " . mysql_error());
mysql_select_db( 'veritabanim', $baglanti )
or die("HATA : " . mysql_error());
?>
