<?php

class NilaiMahasiswa {
    var  $matkul, $nilai, $nim; 

    // Konstruktor dengan parameter
    function __construct($nim, $matkul, $nilai) 
    {
        $this->nilai = $nilai;
        $this->nim = $nim;
        $this->matkul = $matkul;
    }

    // Getter untuk properti nilai
    function kelulusan() {
        return $this->nilai < 56 ? 'TIDAK LULUS' : 'LULUS';
    }

    // Fungsi untuk menentukan kelulusan
    function hasil ()
    {
        if ($this->nilai >= 0 && $this->nilai <= 35) {
            return "E";
        } else if ($this->nilai >= 70 && $this->nilai <= 84) {
            return "B";
        } else if ($this->nilai >= 56 && $this->nilai <= 69) {
            return "C";
        } else if ($this->nilai >= 36 && $this->nilai <= 55) {
            return "D";
        } else if ($this->nilai >= 0 && $this->nilai <= 35) {
            return "E";
        }
    }

    // Fungsi untuk menentukan grade
    public function grade() {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return "lulus";
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return "lulus";
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return "lulus";
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return "tidak lulus";
        } elseif ($this->nilai >= 0 && $this->nilai <= 35) {
            return "tidak lulus";
        } else {
            return "Nilai tidak valid";
        }
    }
}

?>
