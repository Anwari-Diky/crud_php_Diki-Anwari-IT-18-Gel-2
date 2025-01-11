<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: rgb(3, 7, 26); 
        font-size: 28px;
        font-weight: 600;
    }

    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
        box-sizing: border-box;
    }

    label {
        font-size: 16px;
        color: #1e3a8a;
        margin-bottom: 8px;
        display: inline-block;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #bcd4e6;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box;
        background-color: #ffffff;
    }

    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color:  #007BFF;
        border: none;
        border-radius: 4px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3b82f6;
    }
</style>


</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        NIM: <input type="text" name="nim" value="<?php echo $data['nim']; ?>"><br>
        Email: <input type="text" name="email" value="<?php echo $data['email']; ?>"><br>
        Nomor: <input type="text" name="nomor" value="<?php echo $data['nomor']; ?>"><br>
        Jurusan: <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>