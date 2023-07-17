<html>
<h3>Data Barang</h3>
<table border="5">
    <tr>
        <th>No</th>
        <th>Nama Merek</th>
        <th>Warna</th>
        <th>Jumlah</th>
    </tr>
    <?php
    include 'koneksi.php';
    $barang = mysqli_query ($koneksi, "SELECT * from printer");
    $no =1;
    foreach ($barang as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['merek']."</td>
            <td>".$row['warna']."</td>
            <td>".$row['jumlah']."</td>
              </tr>";
        $no++;
    } 
    ?>
    
</table><br>
<a href="tambah.php">Tambah Data</a>
</html>