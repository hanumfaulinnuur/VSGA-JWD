<?php
include 'koneksi.php';

$merek      =$_POST['merek'];
$warna      =$_POST['warna'];
$jumlah     =$_POST['jumlah'];

$query="INSERT INTO printer SET merek='$merek', warna='$warna', jumlah='$jumlah' ";
mysqli_query($koneksi, $query);

header ("location:index.php");
?>
