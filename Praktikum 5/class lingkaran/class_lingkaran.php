<?php

class lingkaran {
    private $jari;
    const PHI =3.14;

    function  __construct($r)
    {
        $this -> jari = $r;
    }

    function getluas()
    {
        $luas = self ::PHI * $this ->jari * $this->jari;
        return $luas;
    }

    function getkeliling()
    {
        return 2 * self ::PHI * $this->jari;
    }

        
}

?>
