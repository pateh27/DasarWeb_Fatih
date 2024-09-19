<?php
echo "Soal Cerita 2 <br>";
echo "Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. <br>
Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata 
setelah mengabaikan nilai tertinggi dan terendah. <br>
Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)
buatkan  program menggunakan php";
// Daftar nilai siswa
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$jumlahSiswa = count($nilai);

// Inisialisasi variabel
$totalNilai = 0;
$nilaiTertinggi1 = $nilaiTertinggi2 = PHP_INT_MIN;
$nilaiTerendah1 = $nilaiTerendah2 = PHP_INT_MAX;

// Loop untuk mencari dua nilai tertinggi, dua nilai terendah, dan menghitung total
for ($i = 0; $i < $jumlahSiswa; $i++) {
    $nilaiSaatIni = $nilai[$i];
    
    // Mencari dua nilai tertinggi
    if ($nilaiSaatIni > $nilaiTertinggi1) {
        $nilaiTertinggi2 = $nilaiTertinggi1;
        $nilaiTertinggi1 = $nilaiSaatIni;
    } elseif ($nilaiSaatIni > $nilaiTertinggi2) {
        $nilaiTertinggi2 = $nilaiSaatIni;
    }
    
    // Mencari dua nilai terendah
    if ($nilaiSaatIni < $nilaiTerendah1) {
        $nilaiTerendah2 = $nilaiTerendah1;
        $nilaiTerendah1 = $nilaiSaatIni;
    } elseif ($nilaiSaatIni < $nilaiTerendah2) {
        $nilaiTerendah2 = $nilaiSaatIni;
    }
    
    // Menghitung total nilai
    $totalNilai += $nilaiSaatIni;
}

// Menghitung total setelah mengabaikan dua nilai tertinggi dan dua nilai terendah
$totalNilaiFinal = $totalNilai - $nilaiTertinggi1 - $nilaiTertinggi2 - $nilaiTerendah1 - $nilaiTerendah2;
echo "<br>";

// Menghitung rata-rata
$rataRata = $totalNilaiFinal / ($jumlahSiswa - 4);

// Menampilkan hasil
echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: " . $totalNilaiFinal . "<br>";
echo "Rata-rata nilai: " . number_format($rataRata, 2) . "<br>";

// Menampilkan nilai yang diabaikan
echo "Nilai tertinggi yang diabaikan: " . $nilaiTertinggi1 . " dan " . $nilaiTertinggi2 . "<br>";
echo "Nilai terendah yang diabaikan: " . $nilaiTerendah1 . " dan " . $nilaiTerendah2 . "<br>";
?>