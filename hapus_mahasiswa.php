<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    $resetSql = "ALTER TABLE mahasiswa AUTO_INCREMENT = 1";
    $conn->query($resetSql);

    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
