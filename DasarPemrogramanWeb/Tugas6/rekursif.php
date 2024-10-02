<?php 
  function tampilkanAgka (int $jumlah, int $indeks = 1){
    echo "Perulangan ke-$indeks<br>";

    if ($indeks < $jumlah) {
      tampilkanAgka($jumlah, $indeks + 1);
    }
  }
  tampilkanAgka(20);
?>