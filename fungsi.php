<?php

function perkalian ($bil1, $bil2) {
    $hasil = $bil1 * $bil2;

    return $hasil;
}

function tambahSatu ($value) {
    $value= $value+1;
}

$a = 5;
tambahSatu ($a);
echo $a;