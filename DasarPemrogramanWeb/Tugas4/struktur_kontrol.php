<?php 
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    }else if ($nilaiNumerik >= 80 && $nilaiNumerik <= 90){
        echo "Nilai huruf: B";
    }else if ($nilaiNumerik >= 70 && $nilaiNumerik <= 80){
        echo "Nilai huruf: C";
    }else if ($nilaiNumerik < 70){
        echo "Nilai huruf: D";
    }
    echo "<br>";
    $jarakSaatIni = "0";
    $jarakTarget = "500";
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget){
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. ";
    echo"<br>";
    $jumlahLahan = 10;
    $tanamanPerlahan = 5;
    $buahPerlahan = 10;
    $jumlahBuah = 0;

    for ($i=1; $i < $jumlahLahan; $i++) { 
        $jumlahBuah += ($tanamanPerlahan * $buahPerlahan);
    }
    echo "Jumlah buah yang akan dipanan adalah: $jumlahBuah <br>";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }
    echo "Total skor ujian: $totalSkor <br>";

    $nilaiSiswa = [85,92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai){
        if ($nilai <60 ) {
            echo "Nilai: $nilai (tidak lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (lulus) <br>";
    }
?>