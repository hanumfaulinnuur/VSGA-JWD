<?php
include_once 'helper/koneksi.php';

$no = null;
if (isset($_GET['no_pn'])) {
  $no = $_GET['no_pn'];
}

if (isset($_POST['no_pn'])) {
  $no             =mysqli_real_escape_string ($conn,$_POST['no_pn']);
  $nama           =htmlspecialchars ( $_POST['nama']);
  $alamat         =mysqli_real_escape_string ($conn,$_POST['alamat']);
  $jenis_kelamin  =mysqli_real_escape_string ($conn,$_POST['jenis_kelamin']);
  $agama          =mysqli_real_escape_string ($conn,$_POST['agama']);
  $asal           =mysqli_real_escape_string ($conn,$_POST['asal']);

  $query = "UPDATE daftar SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', asal='$asal' WHERE no_pn ='$no'";
  mysqli_query($conn, $query);

  header("Location: list_siswa.php");
  exit();
}

$siswa = null;
if ($no !== null) {
  $siswa = mysqli_query($conn, "SELECT * FROM daftar WHERE no_pn ='$no'");
}
$agama = array('islam','kristen', 'katolik','hindu','buda', 'konghucu');
$row = ($siswa !== null) ? mysqli_fetch_array($siswa) : null;

function is_checked($value, $input)
{
  return ($value === $input) ? 'checked' : '';
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Siswa</title>
</head>

<body>
  <div style="border:2px solid #6c757d; padding:5px">
    <form action="form_edit.php" method="post">
      <?php if ($no !== null) : ?>
        <input type="hidden" name="no_pn" value="<?php echo $no; ?>">
      <?php endif; ?>

      <label for="nama">Nama :</label>
      <input type="text" placeholder="nama lengkap" name="nama" value="<?php echo ($row !== null) ? $row['nama'] : ''; ?>"><br><br>

      <label for="alamat">Alamat :</label>
      <textarea name="alamat" cols="30" rows="4"><?php echo ($row !== null) ? $row['alamat'] : ''; ?></textarea><br>

      <label for="kelamin">Jenis Kelamin :</label>
      <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($row !== null && $row['jenis_kelamin'] === "Laki-laki") ? 'checked' : ''; ?>> Laki-Laki
      <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($row !== null && $row['jenis_kelamin'] === "Perempuan") ? 'checked' : ''; ?>> Perempuan<br><br>


      <label for="agama">Agama :</label>
      <select name="agama">
        <?php
        foreach ($agama as $a) {
          echo "<option value='$a'";
          echo ($row !== null && $row['agama'] == $a) ? 'selected="selected"' : '';
          echo ">$a</option>";
        }
        ?>
      </select><br><br>

      <label for="asal">Asal Sekolah :</label>
      <input type="text" name="asal" placeholder="nama sekolah" value="<?php echo ($row !== null) ? $row['asal'] : ''; ?>"> <br><br>

      <input type="submit" value="simpan">
    </form>
  </div>
</body>

<?php

mysqli_close($conn);

?>
</html>