<?php

include "koneksi.php";

$jurusan = "Teknik Informatika";

$stmt = $conn->prepare(
    "SELECT * FROM `254242005` WHERE jurusan = ?"
);

$stmt->bind_param("s", $jurusan);
$stmt->execute();

$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Mahasiswa</h2>

<table>

<tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Alamat</th>
    <th>Status</th>
</tr>

<?php while ($row = $result->fetch_assoc()) { ?>

<tr>
    <td><?= htmlspecialchars($row['nim']) ?></td>
    <td><?= htmlspecialchars($row['nama']) ?></td>
    <td><?= htmlspecialchars($row['jurusan']) ?></td>
    <td><?= htmlspecialchars($row['alamat']) ?></td>

    <td>
        <?= $row['status'] == 1 ? "Aktif" : "Non-Aktif" ?>
    </td>
</tr>

<?php } ?>

</table>

<br>

<a href="index.php">Tambah Mahasiswa</a>

</body>
</html>

<?php

$stmt->close();
$conn->close();

?>