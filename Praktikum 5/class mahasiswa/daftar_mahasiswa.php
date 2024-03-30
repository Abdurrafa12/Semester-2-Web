<?php

require_once "./class_mahasiwa.php";

$mhs1 = new mahasiswa('0001', 'Zaidan');
$mhs1 ->ipk = 3.5;
$mhs1 ->prodi = 'TI';
$mhs1 ->thn_angkatan = '2021';


$mhs2 = new mahasiswa('0002', 'Dani');
$mhs2 ->ipk = 3.1;
$mhs2 ->prodi = 'TI';
$mhs2 ->thn_angkatan = '2021';

$mhs3 = new mahasiswa('0003', 'Arumi');
$mhs3 ->ipk = 1.4;
$mhs3 ->prodi = 'TI';
$mhs3 ->thn_angkatan = '2021';

$mhs4 = new mahasiswa('0004', 'Diana');$mhs1 ->ipk = 3.5;
$mhs4 ->ipk = 2.76;
$mhs4 ->prodi = 'TI';
$mhs4 ->thn_angkatan = '2021';

$mhs5 = new mahasiswa('0005', 'Ahmad');
$mhs5 ->ipk = 3.87;
$mhs5 ->prodi = 'TI';
$mhs5 ->thn_angkatan = '2021';

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5];
?>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Angkatan</th>
            <th>IPK</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ar_mahasiswa as $key => $mahasiswa) : ?>
            <tr>
                <td>1</td>
                <td><?= $mahasiswa ->nim ?></td>
                <td><?= $mahasiswa ->nama ?></td>
                <td><?= $mahasiswa ->prodi ?></td>
                <td><?= $mahasiswa ->thn_angkatan ?></td>
                <td><?= $mahasiswa ->ipk ?></td>
                <td><?= $mahasiswa ->predikat_ipk ()?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>