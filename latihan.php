<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form dari PHP</title>
</head>
<body>
    <h1>Membuat Form Soal Biodata <br>----</h1>
    
    <?php
    if (isset($_GET['nama']) || isset($_GET['alamat'])){ 
        if ($_GET['nama'] == "kosong") {
            echo "<h4 style='color:red'>Nama Belum Di Masukkan!</h4>";
        } elseif ($_GET['alamat'] == "kosong") {
            echo "<h4 style='color:red'>Alamat Belum Di Masukkan!</h4>";
        }
    }

    ?>

<h4>Masukkan Nama Anda :</h4>
    <form action="cek1.php" method="post">
        <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="lahir"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="kelamin"></td>
        </tr>

        <tr>
            <td>Usia</td>
            <td><input type="number" name="usia"></td>
        </tr>

        <tr>
        <td><br><input type="submit" value="Cek"></td>
        </tr>
        </table>
    </form>
</body>
</body>
</html>