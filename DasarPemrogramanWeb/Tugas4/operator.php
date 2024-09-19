<?php 
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilBagi = $a / $b;
    $hasilKali = $a * $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Tambah: {$hasilTambah} <br>";
    echo "Hasil Kurang: {$hasilKurang} <br>";
    echo "Hasil Bagi: {$hasilBagi} <br>";
    echo "Hasil Kali: {$hasilKali} <br>";
    echo "Hasil Sisa Bagi: {$sisaBagi} <br>";
    echo "Hasil Pangkat: {$pangkat} <br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil Sama: {$hasilSama} <br>";
    echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
    echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
    echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
    echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama} <br>";
    echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil AND: {$hasilAnd} <br>";
    echo "Hasil OR: {$hasilOr} <br>";
    echo "Hasil NOT A: {$hasilNotA} <br>";
    echo "Hasil NOT B: {$hasilNotB} <br>";

    $a += $b;
    echo "Hasil A += B = $a <br>";
    $a -= $b;
    echo "Hasil A -= B = $a <br>";
    $a *= $b;
    echo "Hasil A *= B = $a <br>";
    $a /= $b;
    echo "Hasil A /= B = $a <br>";
    $a %= $b;
    echo "Hasil A %= B = $a <br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;
    echo "Hasil Identik: {$hasilIdentik} <br>";
    echo "Hasil Tidak Identik: {$hasilTidakIdentik} <br>";



?>  