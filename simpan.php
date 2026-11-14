<?php

include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// Validasi NIM minimal 8 karakter
if (strlen($nim) < 8) {
    echo "<script>
        alert('NIM minimal 8 karakter!');
        window.location='index.php';
    </script>";
    exit;
}

// Query INSERT
$sql = "INSERT INTO mahasiswa
        (nim, nama, jurusan, alamat)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Periksa apakah query berhasil
if (!$stmt) {
    die("Query gagal: " . $conn->error);
}

// Binding 4 parameter
$stmt->bind_param("ssss", $nim, $nama, $jurusan, $alamat);

// Eksekusi
if ($stmt->execute()) {
    echo "<script>
        alert('Data berhasil disimpan!');
        window.location='tampil.php';
    </script>";
} else {
    echo "Gagal menyimpan: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>