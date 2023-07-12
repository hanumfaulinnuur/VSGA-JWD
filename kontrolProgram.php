<?php

$jawaban = true;
$umur = 12;

//if condition
    if ($jawaban) {
        echo "jawaban anda benar";
    }
    echo "<hr>";

    if ($umur > 11) {
        echo "maaf yah";
    }
    echo "<hr>";

// if else condition
$usia = 91;

if ($usia > 80) {
    echo "jawaban benar";
} else {
    echo "jawaban salah";
}

    echo "<hr>";

//swich
$plat_nomor = 'AB';

switch ($plat_nomor) {
    case 'AB':
        echo "Yogyakarata";
        break;

    case 'DK':
        echo "Bali";
        break;

    case 'P':
        echo "Besuki Raya";
        break;
    default:
        echo "daerah tidak kedeteksi";
        break;
}

echo "<hr>";
