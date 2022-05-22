<?php
$pdo=new PDO('mysql:host=127.0.0.1; port=3306; dbname=companymanager; charset=utf8','root','1234');

if($pdo === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>