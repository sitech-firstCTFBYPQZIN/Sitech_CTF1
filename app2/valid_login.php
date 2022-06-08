<?php
require './db1.php';
if (isset($_POST['user']) && isset($_POST['pass']) && $_POST['user'] != null && $_POST['pass'] != null) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(!preg_match('/[^[:alnum:]_]/',$user) && !preg_match('/[^[:alnum:]_]/',$pass)){
        $sql_query = mysqli_query($connect, "SELECT * FROM usuarios WHERE login = '{$user}'AND senha = '{$pass}'");
        $row = mysqli_num_rows($sql_query);  
        if($row>0){
            $info = mysqli_fetch_all($sql_query);
            $_SESSION['auth'] = true;
            $_SESSION['user'] = $info[0][1];
            $_SESSION['id'] = intval($info[0][0]);
            header('Location: /dashboard/');
        }else{
            header('Location: /index.php?error=3'); 
            die();
        }
    }else{
        header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ'); 
        die();
    }
} else {
    header('Location: /index.php?error=1'); 
    die();
}
