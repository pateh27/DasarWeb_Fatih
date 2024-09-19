<?php 
    echo "Soal Cerita 3<br>";
    echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
    Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
    Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.";
    echo "<br><br>";
    
    $hargaBarang = 120000;
    $batasDiskon = 100000;
    $diskon = 0.2;
    

    if ($hargaBarang > $batasDiskon) {
        $diskon = $hargaBarang * $diskon;
    }
    $totalHarga = $hargaBarang - $diskon;
    echo "Total harga yang harus dibayar adalah: " . $totalHarga;
    
?>