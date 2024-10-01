<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            background-color: #f2f2f2;
        }
         
    </style>
</head>
<body>
    <?php 
        $Dosen = [
            'Nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis_kelamin' => 'Perempuan'
        ];

        echo "Nama : {$Dosen ['Nama']} <br>";
        echo "Domisili : {$Dosen ['Domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['Jenis_kelamin']} <br>";
    ?>

    <table>
        <tr>
            <th style="background-color: steelblue">Key</th>
            <th style="background-color: steelblue">Dosen</th>
        </tr>
        <?php foreach ($Dosen as $key => $value) : ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>