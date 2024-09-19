<?php 
    echo "Soal Cerita <br>";
    echo "Ada soal cerita : Sebuah restoran memiliki 45 kursi di dalamnya. 
    Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
    Berapa persen kursi yang masih kosong di restoran tersebut? <br>";

    $totalKursi = 45;
    $kursiPakai = 28;
    
    $kursiKosong = ($totalKursi - $kursiPakai) / $totalKursi * 100;
    echo "Persen kursi yang masih kosong di restoran tersebut: " . $kursiKosong . "%";
?>