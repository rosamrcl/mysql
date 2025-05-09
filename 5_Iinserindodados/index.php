<?php

//CONEXÃO com o banco
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);

$table="carros";
$marca="BMW";
$descricao="X6";
$motor="25";


$q="INSERT INTO $table (`marca`,`descricao`,`motor`) VALUES ('$marca','$descricao', '$motor')";

$conn->query($q);
$conn->close();

?>