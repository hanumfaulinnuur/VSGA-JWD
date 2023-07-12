<?php


// perulangan for
for ($i=0; $i < 10 ; $i++) { 
    echo "Perulangan ". $i. "<br>";
}

echo "<hr>";

// perulangan while
$si = 0;
while ($si <= 10) {
    echo "Perulangan ". $si . "<br>";
    $si++;
}

echo "<hr>";

// do-while
$do = 1;

do {
    echo "perulangan ke ". $do. "<br>";
     $do++;
} while ($do <= 10);

echo "<hr>";


//foreach

$nama_mhs = array('hanum', 'faulinnuur', 'hana', 'hafa');

foreach ($nama_mhs as $nama) {
    echo $nama . "<br>";
}