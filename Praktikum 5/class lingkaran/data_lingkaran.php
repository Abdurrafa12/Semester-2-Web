<?php

require_once './class_lingkaran.php';

echo "nilai PHI : ". lingkaran::PHI;

$lingkar1 = new lingkaran(10);
$lingkar2 = new lingkaran(4);

echo "<br/> luas lingkaran 1" . $lingkar1 -> getluas();
echo "<br> luas lingkaran 2" . $lingkar2 -> getluas();

echo "<br/> keliling object lingkaran 1" . $lingkar1 -> getkeliling();
echo "<br> keliling object lingkaran 2" . $lingkar2 -> getkeliling();



?>