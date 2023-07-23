<?php
$host = "localhost";
$u = 'root';
$p = "";
$database = "sekolah";

//MySQLi (procedural)
$conn = mysqli_connect($host, $u, $p);
if (!$conn) die ("Koneksi gagal");
mysqli_select_db($conn, $database) or die ("Database tidak ditemukan");