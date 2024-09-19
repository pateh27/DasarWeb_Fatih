<?php
    echo"Soal Cerita 5<br>";
    echo "Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. 
    Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. 
    Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. 
    Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90";

    $siswa = [
        ['nama' => 'Alice', 'nilai'=> 85],
        ['nama' => 'Bob', 'nilai'=> 92],
        ['nama' => 'Charlie', 'nilai'=> 78],
        ['nama' => 'David', 'nilai'=> 64],
        ['nama' => 'Eva', 'nilai' => 90],
    ];
   $totalNilai = 0;
   $jumlahSiswa = count($siswa);
   
   foreach($siswa as $data){
    $totalNilai += $data['nilai'];
   }
   echo "<br>";
   $rataRata = $totalNilai / $jumlahSiswa;
   echo "Rata-rata kelas: " . number_format($rataRata, 2) . "<br>";
   echo "Daftar nilai siswa yang mencapai rata-rata kelas: <br>";
   foreach ($siswa as $data) {
    if ($data['nilai'] > $rataRata) {
        echo "Nama: {$data['nama']}, Nilai: {$data['nilai']} <br>";
    }
}


?>