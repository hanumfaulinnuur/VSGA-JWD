<?php

include 'helper/koneksi.php';

$baris = $_GET['no_pn'];

$query = "DELETE FROM daftar where no_pn = '$baris'";
mysqli_query($conn, $query);
header("location:list_siswa.php?status=sukses");



mysqli_close($conn);


?>