<!DOCTYPE html>
<html>
<head>
    <title>Tugas Perulangan For</title>
</head>
<body>

<h2>Daftar Angka 1 - 15 (Perulangan For)</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Nomor Urut</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>Ini adalah baris ke-" . $i . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
