<?php

//membuka file
$file = fopen('buka.txt', 'r+');

//menulis file
if($file){
    // fputs($file, "assalamualaikum");
}
//membaca data
echo fgets($file);
//menutup file
fclose($file);