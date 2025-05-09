<?php
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);

//Criar tabela
$q="DROP TABLE testepratico";
$conn->query($q);
$conn->close();

?>