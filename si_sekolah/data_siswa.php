<?php
include 'koneksi_php'; // Ensure this file contains your database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Siswa</td>
            <td>Alamat</td>
            <td>Asal Sekolah</td>
            <td>Aksi</td>
        </tr>
        <?php 
        $no = 1;
        $query = mysqli_query($konek, "SELECT * FROM data_siswa");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_siswa']; ?></td>
            <td><?php echo $data['alamat_siswa']; ?></td>
            <td><?php echo $data['agama_siswa']; ?></td>
            <td><?php echo $data['asal_siswa']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id_siswa']; ?>">Edit</a> 
                <a href="delete.php?id=<?php echo $data['id_siswa']; ?>" onclick="return confirm('Are you sure you want to delete this record?');">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
