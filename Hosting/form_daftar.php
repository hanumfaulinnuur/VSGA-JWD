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
            header("location:list_siswa.php?status=sukses");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Tambah Data Siswa</title>
</head>
<body>

<div class="container m-3 p-3 border border-secondary-subtle">
<h3>Tambah Data Siswa</h3><hr>
<form action="form_daftar.php" method="post">
  <div class="mb-2 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
    <div class="col-sm-10">
      <input type="teks" class="form-control" name="nama" placeholder="nama lengkap" required >
    </div>
  </div>

  <div class="mb-2 row">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat :</label>
    <div class="col-sm-10">
      <textarea cols="30" rows="4" class="form-control" name="alamat" required ></textarea >
    </div>
  </div>

  <label for="Alamat" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis_kelamin"  value="Laki-laki">
  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis_kelamin"  value="Perempuan">
  <label class="form-check-label" for="inlineRadio2">Perempuan</label><br>
</div>

<br><label for="nama" class="col-sm-2 col-form-label">Agama :</label>
<select name="agama"required>
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="hindu">Hindu</option>
        <option value="buda">Budha</option>
        <option value="konghucu">Konghucu</option>
    </select>

<div class="mb-2 row">
    <label for="nama" class="col-sm-2 col-form-label">Asal Sekolah :</label>
    <div class="col-sm-10">
      <input type="teks" class="form-control" name="asal" placeholder="Asal sekolah" required >
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Daftar</button>
</form>
</div>
</body>
</html>

<?php

mysqli_close($conn);

?>


