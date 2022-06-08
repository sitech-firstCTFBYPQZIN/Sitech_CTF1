<?php
require '../db1.php';

$user = $_SESSION['user'];
$titulo = base64_encode($_POST['titulo']);
$nota = base64_encode($_POST['nota']);

$sql = "INSERT INTO notes (user,titulo,nota) VALUES ('{$user}', '{$titulo}','{$nota}')";
$sql_query = mysqli_query($connect, $sql);

header('Location: ./?status=1');
?>