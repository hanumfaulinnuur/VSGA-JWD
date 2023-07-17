<?php

$host = "localhost";
$u = "root";
$p = "";

$con = new mysqli($host, $u, $p, "db_peserta");
if ($con->connect_error) {
    die("koneksi gagal". $con->connect_error);
}

echo ('koneksi berhasil');