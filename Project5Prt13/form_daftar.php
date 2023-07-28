<?php  
include 'helper/koneksi.php';
    if (isset($_POST['nama'])) {
        $nama           =htmlspecialchars( $_POST['nama']);
        $alamat         =mysqli_real_escape_string($conn,$_POST ['alamat']);
        $jenis_kelamin  =mysqli_real_escape_string($conn, $_POST ['jenis_kelamin']);
        $agama          =mysqli_real_escape_string($conn, $_POST ['agama']);
        $asal           = mysqli_real_escape_string($conn,$_POST ['asal']);

        $query_insert = "INSERT INTO daftar (nama, alamat,jenis_kelamin, agama, asal) 
        values('".$nama."',' ".$alamat."', '".$jenis_kelamin."', '".$agama."', '".$asal."') ";

        $hasil = mysqli_query($conn, $query_insert);
        if ($hasil) {
            header("location:index.php?status=sukses");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
<div style="border:2px solid #6c757d; padding:5px">

<form action="form_daftar.php" method="post">
    <label for="nama">Nama :</label>
    <input type="text" name="nama" placeholder="nama lengkap" required><br><br>

    <label for="alamat">Alamat :</label>
    <textarea name="alamat" cols="30" rows="4" required></textarea ><br>

    <label for="jenis_kelamin">Jenis Kelamin :</label>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan <br><br>

    <label for="agama" >Agama :</label>
    <select name="agama"required>
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="hindu">Hindu</option>
        <option value="buda">Budha</option>
        <option value="konghucu">Konghucu</option>
    </select><br><br>

    <label for="asal">Asal Sekolah :</label>
    <input type="text" name="asal" placeholder="Asal Sekolah" required><br><br>
    
    <input type="submit" value="Daftar">
</form>
</div>
</body>
</html>

<?php

mysqli_close($conn);

?>


