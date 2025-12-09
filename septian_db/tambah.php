<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

<h2>Tambah Data Siswa</h2>

<form method="post">
    Nama Lengkap:<br>
    <input type="text" name="nama_lengkap" required><br><br>

    NISN:<br>
    <input type="text" name="nisn" required><br><br>

    Kelas:<br>
    <input type="text" name="kelas" required><br><br>

    Jurusan:<br>
    <input type="text" name="jurusan" required><br><br>

    <button type="submit" name="save">Save</button>
</form>

<?php
if (isset($_POST['save'])) {
    mysqli_query($conn, "INSERT INTO siswa (nama_lengkap, nisn, kelas, jurusan) VALUES (
        '$_POST[nama_lengkap]',
        '$_POST[nisn]',
        '$_POST[kelas]',
        '$_POST[jurusan]'
    )");
    header("Location: index.php");
}
?>

</body>
</html>
