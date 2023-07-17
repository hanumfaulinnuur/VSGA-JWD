<?php

//cara membuat array
$arr_mahasiswa = array ('hanum', 'hana', 'holla');
$arr_buah = ['manggis', 'mangga', 'jeruk'];

$arr_anggota[0] = 'titik';
$arr_anggota[1] = 'koma';

//menambah array
$arr_anggota[2] = 'petik';
$arr_anggota[3] = 'seru';

print_r($arr_anggota);

//menghapus array
unset($arr_anggota[3]);

//memanggil array
echo $arr_buah[0]. "<br>";
echo $arr_anggota [1]. "<br>";
print_r($arr_anggota);

echo "<hr>";

for ($i=0; $i < count($arr_buah); $i++) { 
    echo $arr_buah[$i]. "<br>";
}

echo "<hr>";

foreach ($arr_mahasiswa as $maha) {
    echo $maha. "<br>";
}
echo "<hr>";

//array asosiatif
$artikel = [
    'judul'     => 'belajar PHP', 
    'penulis'   => 'Kofin',
];

print_r($artikel);
echo "<h2>". $artikel['judul'];

echo "<hr>";

//array multidimensi
$gambar = [
    [2,3,4],
    [7,5,0],
    [4,3,8]
];

echo $gambar [1][2];
echo "<hr>";




