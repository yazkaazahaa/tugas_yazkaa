<!DOCTYPE html>
<html>
<head>
    <title>Tugas Perulangan While</title>
</head>
<body>

<h2>Perkalian 3 (Perulangan While)</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $angka = 1; // Inisialisasi counter

        while ($angka <= 10) {
            $hasil = 3 * $angka;

            echo "<tr>";
            echo "<td>3 x " . $angka . "</td>";
            echo "<td>" . $hasil . "</td>";
            echo "</tr>";

            $angka++; // Increment counter
        }
        ?>
    </tbody>
</table>

</body>
</html>
