<?php
include 'helper/koneksi.php';

$q="select * from daftar";
$hasil=mysqli_query($conn,$q);
//jumlah data pada tabel
$jumlah=mysqli_num_rows($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>List Pendaftar</title>
</head>
<body>
<div class="container">
<br><h3>Siswa Yang Sudah Mendaftar</h3><hr>
<a class="btn btn-success" href="form_daftar.php" role="button">[+] Tambah baru</a><br><br>
<div class="container">
<table  class="table table-striped table-hover table-bordered">
  <thead>
    <tr class="table-secondary">
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Sekolah Asal</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php
     if($jumlah > 0) {
        while($baris=mysqli_fetch_assoc($hasil)){
            echo("<tr>
            <td>".htmlspecialchars($baris['no_pn'])."</td>
        <td>".$baris['nama']."</td>
        <td>".htmlspecialchars($baris['alamat'])."</td>
        <td>".htmlspecialchars($baris['jenis_kelamin'])."</td>
        <td>".htmlspecialchars($baris['agama'])."</td>
        <td>".htmlspecialchars($baris['asal'])."</td>
        <td>
        <center>
        <a class='btn btn-info' href='form_edit.php?no_pn=$baris[no_pn]'><i class='bi bi-pencil-square'></i></i></a>
        <a class='btn btn-danger' href='delete.php?no_pn=$baris[no_pn]'><i class='bi bi-trash'></i></i></a>
        </center>
        </td> 
    </tr>
    ");
        }
    }
    ?>

  </tbody>
</table>
</div>


<br>
 <b><h4>Total Pendaftar : <?php echo ($jumlah)?></h4></b>
</div>
</body>
</html>


<?php

mysqli_close($conn);

?>

