<?php
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$Nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

if(!empty($proses)); {
    echo 'Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$Nilai_uts;
    echo '<br/>NIlai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Pratikum : '.$nilai_tugas;
}
?>
