<?php

//CONEXÃO com o banco
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);

$id=7;
$stmt=$conn->prepare("UPDATE carros SET marca=?, descricao=?, motor=? WHERE id=?");

$marca="Ford";
$descricao="Fusion";
$motor="26";

$stmt->bind_param("ssii", $marca, $descricao, $motor, $id);
$stmt->execute();
if ($stmt->error){
    echo "Erro:" . $stmt->error;
}



?>