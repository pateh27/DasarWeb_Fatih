<?php 
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "fatih" && $password == "1234") {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["status"] = 'login';
        echo "Anda berhasili login. Silahkan Menuju <a href='homePage.html'>Halaman Home</a>";
    } else {
        echo "Username atau Password anda salah. Silahkan login lagi <a href='Login.html'>Halaman Login</a> kembali.";
    }
?>