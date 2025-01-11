<?php
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            padding: 8px 12px;
            border-radius: 4px;
            margin-bottom: 20px;
            display: inline-block;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: rgb(59, 243, 56);
        }


        a::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.4s ease, height 0.4s ease, opacity 0.4s ease;
            opacity: 0;
        }

        a:active::after {
            width: 200px;
            height: 200px;
            opacity: 0;
            transition: width 0.2s ease, height 0.2s ease, opacity 0.2s ease;
        }


        table {
        border-collapse: collapse;
        width: 90%;
        max-width: 800px;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        margin: 20px auto;
        font-family: Arial, sans-serif;
        }

        th, td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background: linear-gradient(90deg, #007BFF, #0056b3);
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e6f7ff;
            transition: background-color 0.3s ease;
        }

    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="tambah_mahasiswa.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Nomor</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row =$result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['nomor']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
                    <td>
                        <a href="edit_mahasiswa.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="hapus_mahasiswa.php?id=<?php echo $row['id']; ?>">Hapus</a> 
                    </td>
                </tr>
        <?php } ?>
    </table>

</body>

</html>