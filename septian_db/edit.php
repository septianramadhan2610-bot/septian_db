<?php 
include 'config.php'; 
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$data  = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form method="post">
    Nama Lengkap:<br>
    <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap']; ?>" required><br><br>

    NISN:<br>
    <input type="text" name="nisn" value="<?= $data['nisn']; ?>" required><br><br>

    Kelas:<br>
    <input type="text" name="kelas" value="<?= $data['kelas']; ?>" required><br><br>

    Jurusan:<br>
    <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE siswa SET 
        nama_lengkap='$_POST[nama_lengkap]',
        nisn='$_POST[nisn]',
        kelas='$_POST[kelas]',
        jurusan='$_POST[jurusan]'
        WHERE id='$id'
    ");
    header("Location: index.php");
}
?>

</body>
</html>
