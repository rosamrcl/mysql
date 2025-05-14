<?php

$host= "localhost";
$db="banco_teste";
$user= "root";
$pass="";

$conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

$id=5;
$marca="Renault";
$descricao="Kwid";
$motor=15;

$stmt = $conn->prepare ("UPDATE carros SET marca=:marca, descricao=:descricao, motor=:motor WHERE id=:id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":marca", $marca);
$stmt->bindParam(":descricao", $descricao);
$stmt->bindParam(":motor", $motor);

$stmt->execute();

?>