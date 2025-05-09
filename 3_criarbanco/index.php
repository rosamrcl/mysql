<?php
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);

//Criar tabela
$q="CREATE TABLE testepratico (nome VARCHAR(100), sobrenome VARCHAR (100))";
$conn->query($q);
$conn->close();

?>