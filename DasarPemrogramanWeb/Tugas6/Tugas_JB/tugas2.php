<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siwa$siswa Siswa</title>
    <link rel="stylesheet" type="text/css"  href="styletugas2.css">
</head>
<body>
    <h2>Data Siswa</h2>
    
    <table>
        <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Kelas</th>
        <th>Alamat</th>
        </tr>

        <?php
        $siswa = array(
            array("Andi", 15, "10A", "Malang"),
            array("Siti", 16, "10B", "Batu"),
            array("Budi", 15, "10A", "Dinoyo"),
            array("Anton", 25, '15A', "Dinoyo"),
        );

       foreach ($siswa as $key => $value) {
            echo "<tr>";
            echo "<td>" . $value[0] . "</td>";
            echo "<td>" . $value[1] . "</td>";
            echo "<td>" . $value[2] . "</td>";
            echo "<td>" . $value[3] . "</td>";
            echo "</tr>";
        }

        function get_umur($umur) {
            $totalUmur = 0;
            $jumlahSiswa = count($umur);
            foreach ($umur as $key => $value) {
                $totalUmur += $value[1];
            }
            return $jumlahSiswa > 0 ? $totalUmur / $jumlahSiswa : 0;
        }
    ?>
    </table>

    <h3>Rata-rata Umur Siswa: <?php echo get_umur($siswa); ?> Tahun</h3>
   
</body>
</html>