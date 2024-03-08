<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="form_nilai.php">
            Nama : <input type="text" name="nama" value="" size="30"/><br/>
            Mata Kuliah :
            <select name="matkul">
                <option value="DDP">Dasar Dasar Pemrograman</option>
                <option value="BDI">Basis Data I</option>
                <option value="WEB2">Pemrograman Web</option>
            </select><br/>
        Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"/><br/>
        Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"/><br/>
        Nilai Tugas/Praktikum :
        <input type="text" name="nilai_tugas" value="" size="6"/><br/>
        <input type="submit" value="Simpan" name="proses"/>
        </form>
    </body>
</html>
