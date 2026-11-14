<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Form Input Mahasiswa</h2>

<form action="simpan.php" method="POST">

    NIM:<br>
    <input type="text" name="nim" required>
    <br><br>

    Nama:<br>
    <input type="text" name="nama" required>
    <br><br>

    Jurusan:<br>
    <input type="text" name="jurusan" required>
    <br><br>

    Alamat:<br>
    <textarea name="alamat"></textarea>
    <br><br>

    <button type="submit">Simpan</button>

</form>

<br>

<a href="tampil.php">Lihat Data Mahasiswa</a>

</body>
</html>