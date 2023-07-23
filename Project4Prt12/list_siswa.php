<?php
include 'helper/koneksi.php';

$q="select * from daftar";
$hasil=mysqli_query($conn,$q);
//jumlah data pada tabel
$jumlah=mysqli_num_rows($hasil);
?>

<h3>Siswa yang sudah mendaftar</h3>
<a href="form_daftar.php">[+]Tambah baru</a> <br><br>
<table border="1px">
    <tr>
        <td><b>No</b></td>
        <td><b>Nama</b></td>
        <td><b>Alamat</b></td>
        <td><b>Jenis Kelamin</b></td>
        <td><b>Agama</b></td>
        <td><b>Sekolah Asal</b></td>
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
            </tr>
    ");
        }
    }
    ?>
</table><br>
Total = <?php echo ($jumlah)?>