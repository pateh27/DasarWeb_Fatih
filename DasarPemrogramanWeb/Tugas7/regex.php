<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $pattern = '/[a-z]/';
        $text = 'This is a Sample Text';

        if(preg_match($pattern, $text)) {
            echo "Huruf kecil ditemukan! <BR>";
        }else {
            echo "Tidak ada huruf kecil! <br>";
        }
    ?>


    <?php
    // soal no 5.2 
        $pattern = '/[0-9]/';
        $text = 'this are 123 apples.';

        if(preg_match($pattern, $text, $matches)) {
            echo "Cocokkan:  <br>" . $matches[0];
        }else {
            echo "Tidak ada yang cocok <br>";
        }
    ?>

    <?php 
    // soal no 5.3
        $pattern = '/apple/';
        $replacement = 'banana';
        $text = 'I like apple pie. <br>';
        $newtext = preg_replace($pattern, $replacement, $text);
        echo $newtext;
    ?>

    <?php 
    // soal no 5.4
        $pattern = '/go*d/';
        $text = 'god is good.';
        if(preg_match_all($pattern, $text, $matches)) {
            echo "<br>Cocokkan Semua ";
            foreach($matches[0] as $match) {
                echo $match . " ";
            }
        }else {
            echo "Tidak ada yang cocok <br>";
        }
    ?>

    <?php 
    // soal no 5.5
    $pattern = '/go?d/';
    $text = 'god is good.';
    if(preg_match($pattern, $text, $matches)) {
        echo "<br>Cocokkan Semua ";
        echo $match . "<br>";
        
    }else {
        echo "Tidak ada yang cocok <br>";
    }
    ?>

    <?php 
    // soal no 5.6
        $pattern = '/go{n,m}d/';
        $text = 'god is good.';
        if(preg_match($pattern, $text, $matches)) {
            echo "<br>Cocokkan Semua ";
            echo $match . "<br>";
        }else {
            echo "Tidak ada yang cocok <br>";
        }
    ?>
</body>
</html>