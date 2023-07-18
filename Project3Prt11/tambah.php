<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h2>Tambah Data Barang</h2>
        <form action="simpan.php" method="POST">
            <table>
                <tr>
                    <td><label for="no">No</label></td>
                    <td><input type="number" size="15" name="no" required></td>
                  </tr>
    
                  <tr>
                    <td><label for="merek">Nama Merek</label></td>
                    <td><input type="text" size="35" name="merek" required></td>
                  </tr>

                  <tr>
                    <td><label for="warna">Warna</label></td>
                    <td><input type="text" size="50" name="warna" required></td>
                  </tr>

                  <tr>
                    <td><label for="jumlah">Jumlah</label></td>
                    <td><input type="number" size="20" name="jumlah" required></td>
                  </tr>

                  <tr><td><button type="submit" value="simpan">Simpan</button></td></tr>
                  <tr><td><button type="submit" value="ulangi">Ulangi</button></td></tr>
                  <tr><td><button type="submit" value="kembali">Kembali</button></td></tr>
            </table>
        </form>
</html>