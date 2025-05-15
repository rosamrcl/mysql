<?php 
$host = "localhost";
$user = "root";
$pass ="";

$conn= new mysqli($host,$user, $pass);

$q="CREATE DATABASE IF NOT EXISTS mrcl";

$q=("CREATE TABLE IF NOT EXISTS 
categoria (id INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR (100));");
$conn->close();

?>