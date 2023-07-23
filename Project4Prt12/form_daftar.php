<?php  
include 'helper/koneksi.php';
    if (isset($_POST['nama'])) {
        $nama=mysqli_real_escape_string($conn, $_POST['nama']);
        $alamat=mysqli_real_escape_string($conn,$_POST ['alamat']);
        $jenis_kelamin =mysqli_real_escape_string($conn, $_POST ['jenis_kelamin']);
        $agama =mysqli_real_escape_string($conn, $_POST ['agama']);
        $asal = mysqli_real_escape_string($conn,$_POST ['asal']);

        $query_insert = "INSERT INTO daftar (nama, alamat,jenis_kelamin, agama, asal) 
        values('".$nama."',' ".$alamat."', '".$jenis_kelamin."', '".$agama."', '".$asal."') ";

        $hasil = mysqli_query($conn, $query_insert);
        if ($hasil) {
            header("location:index.php?status=sukses");
        }
    }
?>
<div style="border:2px solid #6c757d; padding:5px">

    <form action="form_daftar.php" method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" value="nama lengkap"><br><br>

        <label for="alamat">Alamat :</label>
        <textarea name="alamat" cols="30" rows="4"></textarea><br>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan <br><br>

        <label for="agama">Agama :</label>
        <select name="agama">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="hindu">Hindu</option>
            <option value="buda">Budha</option>
            <option value="konghucu">Konghucu</option>
        </select><br><br>

        <label for="asal">Asal Sekolah :</label>
        <input type="text" name="asal" value="nama sekolah"><br><br>
        
        <input type="submit" value="Daftar">
    </form>
</div>

