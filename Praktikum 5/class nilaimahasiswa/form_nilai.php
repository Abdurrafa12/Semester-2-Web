<?php
require_once './class_nilaimahasiswa.php';

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $nim = $POST['nim'];
    $matkul = $POST['matkul'];
    $nilai = $POST['nilai'];

    $nilaimahasiswa = new NilaiMahasiswa($nim, $maktul, $nilai);

}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="post" action="">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="BD">Basis Data</option>
        <option value="PW">Pemprograman Web 2</option>
        <option value="FE">Prmprograman</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<hr>

<?php if ($_SERVER ['REQUEST_METHOD'] == 'POST') : ?>
<table>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?= $nilaimahasiswa->nim ?></td>

    </tr>
    <tr>
        <td>Nama Mata Kuliah</td>
        <td>:</td>
        <td><?=  $nilaimahasiswa->matkul ?></td>

    </tr>
    <tr>
        <td>Nilai</td>
        <td>:</td>
        <td><?= $nilaimahasiswa->nilai ?></td>

    </tr>
    <tr>
        <td>Hasil Ujian</td>
        <td>:</td>
        <td><? $nilaimahasiswa->hasil() ?></td>

    </tr>
    <tr>
        <td>Grade</td>
        <td>:</td>
        <td><?= $nilaimahasiswa->kelulusan () ?></td>

    </tr>
</table>
<?php else : ?>
    <p>Belum ada nilai yang dikirim</p>
<?php endif ?>