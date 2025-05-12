<?php

//CONEXÃO com o banco
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);
//definiu as variaveis do que irá adicionar
$marca="Kia";
$descricao="Cerato";
$motor="18";

//deixa o código mais seguro para dados sensiveis
$stmt=$conn->prepare("INSERT INTO carros (`marca`,`descricao`,`motor`) VALUES (?,?,?)");

$stmt->bind_param("ssi", $marca, $descricao,$motor);
$stmt->execute();


?>