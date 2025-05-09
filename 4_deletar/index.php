<?php
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);

//DELETAR tabela
$q="DROP TABLE testepratico";
$conn->query($q);
$conn->close();

?>