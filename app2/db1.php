<?php
ob_start();

if(!isset($_SESSION)){
    session_start();
}

$host='localhost';
$userdb='root';
$passdb='root123';
$dbname='sitech';

$connect = mysqli_connect($host,$userdb,$passdb,$dbname);

?>