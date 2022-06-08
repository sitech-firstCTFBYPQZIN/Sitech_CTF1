<?php
require '../db1.php';
if (isset($_POST['user']) && isset($_POST['pass']) && $_POST['user'] != null && $_POST['pass'] != null) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(strlen($user)<=30 && strlen($pass)<=30){
        if(!preg_match('/[^[:alnum:]_]/',$user) && !preg_match('/[^[:alnum:]_]/',$pass)){
            $sql_query = mysqli_query($connect, "SELECT * FROM usuarios WHERE login = '{$user}'");
            $row = mysqli_num_rows($sql_query);
            if (!$row > 0) {
                $sql = "INSERT INTO usuarios (login,senha) VALUES ('{$user}', '{$pass}')";
                $sql_query = mysqli_query($connect, $sql);
                header('Location: /index.php');
            } else {
                header('Location: /register/index.php?error=2');
                die();
            }
        }else{
            header('Location: /register/index.php?error=sqli');
            die();
        }
    }else{
        header('Location: /register/index.php?error=3');
        die();
    }
    } else {
        header('Location: /register/index.php?error=1');
        die();
    }