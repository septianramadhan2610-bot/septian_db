<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>
<a href="tambah.php">Tambah Siswa</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>NISN</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM siswa");
    while ($row = mysqli_fetch_assoc($query)) :
    ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama_lengkap']; ?></td>
        <td><?= $row['nisn']; ?></td>
        <td><?= $row['kelas']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
            |
            <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus data?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
