<?php

$ar_prodi = ["SI" => "Sistem Informasi", 
            "TI" => "Teknik Informatika", 
            "BD" => "Bisnis Digital",
            "PA" => "Agama"
          ];

$ar_skill = ["HTML" =>10, 
              "CSS" =>10, 
              "JavaScript" =>20,
              "RWD Bootstrap" =>20, 
              "PHP" =>30,
              "Python" =>30, 
              "Java" =>50
            ];

$ar_domisili = ["Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi", "Lainya", "Tambun"]

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>


<body>

    <div class="container">
        <fieldset>
            <legend>Form Registrasi IT Club Data Science</legend>

            <form>
  <div class="row mb-3">
    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nim" nane="nim">
    </div>
  </div>
  <div class="row mb-3">
    <label for="Nama Lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
    <div class="col-sm-10">
      <div class="form-check form-check-inline" >
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="Laki-laki" checked>
        <label class="form-check-label" for="Laki-laki">
           Laki-laki
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
        <label class="form-check-label" for="perempuan">
           Perempuan
        </label>
      </div>
  </fieldset>
        <div class="row mb-3">
            <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <select class="form-select" id="prodi" name="prodi">
                  <?php foreach ($ar_prodi as $key => $value) : ?>
                  <option value ="<?- $key ?>"><?php echo $value ?></option>
                  <?php endforeach?>
                </select>
            </div>
        </div>
    <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Skill WEB & Programming</legend>
    <div class="col-sm-10">
      <?php foreach ($ar_skill as $tech => $nilai) : ?>
        <div class="form-check form=check-inline">
          <input 
          class="foem-check-inline"
          type="checkbox" id="html"
          value= "<?= $nilai ?>"><label
          class="form-check-label"
          for="html"><?= $tech ?></label>
        </div>
      <?php endforeach ?>
    </div>
  </fieldset>
  <div class="row mb-3">
            <label for="prodi" class="col-sm-2 col-form-label">Tempat Domisili</label>
            <div class="col-sm-10">
                <select class="form-select" id="domisili" name="domisili">
                <?php foreach ($ar_domisili as $key => $value) : ?>
                  <option value ="<?- $key ?>"><?php echo $value ?></option>
                  <?php endforeach?>
                  </select>
            </div>
        </div>
        <div class="row mb-3">
    <label for="nim" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" nane="email">
    </div>
  </div>
    <button type="submit" class="btn btn-primary">submit</button>
</form>
    </fieldset>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>