<?php

$file = "buka.txt";
$open = fopen ($file, 'r');

if(!$open) {
    print"gagal dibuka";
    exit();
}

while (!feof($open)){
    $data = fgets($open, 50);
    print ($data. "<br>");
}

fclose($open);