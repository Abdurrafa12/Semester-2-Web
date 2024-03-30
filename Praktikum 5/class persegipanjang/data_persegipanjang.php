<?php

require_once "class_persegipanjang.php";

$persegipanjang1 = new PersegiPanjang(5, 10);
$persegipanjang2 = new persegipanjang(7, 15);

echo "Luas Persegi Panjang : " . $persegipanjang1->getLuas();
echo "<br>keliling Persegi Panjang : " . $persegipanjang2->getKeliling();