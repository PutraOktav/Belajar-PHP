<?php

// define('NAMA', 'Oktav');
// echo NAMA;

// echo "<br>";

// const UMUR = 22;
// echo UMUR;

// echo "<br>";

// class Coba
// {
//     const NAMA = 'Oktav';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function Coba()
// {
//     return __FUNCTION__;
// }

// echo Coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
