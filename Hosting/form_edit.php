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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Edit Data Siswa</title>
</head>
<body>
<div class="container m-3 p-3 border border-secondary-subtle">
<h3>Edit Data Siswa</h3><hr>
<form action="form_edit.php" method="post">

      <?php if ($no !== null) : ?>
        <input type="hidden" name="no_pn" value="<?php echo $no; ?>">
      <?php endif; ?>

  <div class="mb-2 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
    <div class="col-sm-10">
      <input type="teks" class="form-control" name="nama" value="<?php echo ($row !== null) ? $row['nama'] : ''; ?>" >
    </div>
  </div>

  <div class="mb-2 row">
    <label for="Alamat" class="col-sm-2 col-form-label">Alamat :</label>
    <div class="col-sm-10">
      <textarea cols="30" rows="4" class="form-control" name="alamat" ><?php echo ($row !== null) ? $row['alamat'] : ''; ?></textarea >
    </div>
  </div>

  <label for="Alamat" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis_kelamin"  value="Laki-laki" <?php echo ($row !== null && $row['jenis_kelamin'] === "Laki-laki") ? 'checked' : ''; ?>>
  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($row !== null && $row['jenis_kelamin'] === "Perempuan") ? 'checked' : ''; ?>>
  <label class="form-check-label" for="inlineRadio2">Perempuan</label><br>
</div>

<br><label for="nama" class="col-sm-2 col-form-label">Agama :</label>
<select name="agama">
<?php
        foreach ($agama as $a) {
          echo "<option value='$a'";
          echo ($row !== null && $row['agama'] == $a) ? 'selected="selected"' : '';
          echo ">$a</option>";
        }
        ?>
    </select>

<div class="mb-2 row">
    <label for="nama" class="col-sm-2 col-form-label">Asal Sekolah :</label>
    <div class="col-sm-10">
      <input type="teks" class="form-control" name="asal" value="<?php echo ($row !== null) ? $row['asal'] : ''; ?>" >
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</body>

<?php

mysqli_close($conn);

?>
</html>