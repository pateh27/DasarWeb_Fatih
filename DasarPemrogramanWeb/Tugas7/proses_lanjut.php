<?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $selectedBuah = $_POST['buah'];
            if (isset($_POST['warna'])) {
                $selectedWarna = $_POST['warna'];
            } else {
                $selectedWarna = [];
            }
        }
    
      $selectedJenisKelamin = $_POST["jeniskelamin"];
      echo "Jenis Kelamin Anda: " .$selectedJenisKelamin . "<br>";

      echo "Anda memilih buah: " . $selectedBuah . "<br>";
      if(!empty($selectedWarna)){
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
      }else {
        echo "Anda tidak memilih warna favorit.<br>";
      }

    ?>