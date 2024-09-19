<?php
    echo "Soal Cerita 4<br>";
    echo "Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
    Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan.<br> 
    Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. 
    Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”";

    $poinPemain = 550;
    $totalSkor = $poinPemain;

    echo"<br> Total Skor pemain adalah " . $totalSkor . " poin <br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)<BR>";
    if ($poinPemain > 500) {
        $hadiah = "YA";
        echo" YA anda mendapatkan hadiah tambahan Berupa 1500 poin. sehingga total poin anda menjadi " . ($totalSkor + 1500) . " poin";
    } else {
        $hadiah = "TIDAK";
        echo "tidak mendapatkan hadiah tambahan. total poin anda tetap " . $totalSkor . " poin";
    }
?>