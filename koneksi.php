<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "254242005"
);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>