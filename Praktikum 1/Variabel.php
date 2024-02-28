<?php

$nama = 'Abdurrahman Rafatullah' ;
$umur = 20 ;
$berat = 63.30 ;

echo "Nama Saya $nama, saya berumur" . $umur .
" dan saya memiliki berat" . $berat . "kg" ;

echo "<br />" ;
echo "<br />" ;

// variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo "<br />" ;
echo "<br />" ;

define('PHI', 3.16) ;
define('DBNAME', 'inventori') ;
define('DBSERVER', 'localhost') ;

$jari = 8;
$luas = PHI * $jari *
$jari;
$kil = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari' . $jari . ':' . $luas;
echo '<br /> kelilingnya :' . $kil;

echo "<hr>";

echo"Nama databasenya : " . DBNAME;
echo "<hr>lokasi databasenya ada di :
". DBSERVER




?>

