<?php 
   session_start();

   $username = "fatih";
   $password = "270604";

   if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == $username && $password == $password){
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: homePage.php");
            exit();
        }else{
            header("Location: loginPage.php");
            exit();
        }
   }

?>