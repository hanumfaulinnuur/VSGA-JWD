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
    <title>List Pendaftar</title>
</head>
<body>
<h3>Siswa Yang Sudah Mendaftar</h3>
<a href="form_daftar.php">[+]Tambah baru</a> <br><br>
<table border="1px">
    <tr>
        <td><b>No</b></td>
        <td><b>Nama</b></td>
        <td><b>Alamat</b></td>
        <td><b>Jenis Kelamin</b></td>
        <td><b>Agama</b></td>
        <td><b>Sekolah Asal</b></td>
        <td><b>Tindakan</b></td>

    </tr>
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
        <td><a href ='form_edit.php?no_pn=$baris[no_pn]' >Edit</a>
            <a href ='delete.php?no_pn=$baris[no_pn]' >Delete</a>
        </td>
            </tr>
    ");
        }
    }
    ?>
</table><br>
Total = <?php echo ($jumlah)?>
</body>
</html>



<?php

mysqli_close($conn);

?>

