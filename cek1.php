<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$lahir = $_POST['lahir'];
$kelamin = $_POST['kelamin'];
$usia = $_POST['usia'];
if($nama == ""){
header("location:kominfo.php?nama=kosong"); 
}else{
    echo "<h2>Nama anda adalah ". $nama. "</h2>";
    echo "<h2>Alamat anda adalah ". $alamat. "</h2>";
    echo "<h2>Tempat lahir anda adalah ". $lahir. "</h2>";
    echo "<h2>jenis kelamin adalah ". $kelamin. "</h2>";
    echo "<h2>usia anda adalah ". $usia. "</h2>";
}
?>