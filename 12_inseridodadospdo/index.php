<?php

$host= "localhost";
$db="banco_teste";
$user= "root";
$pass="";

$conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

$stmt = $conn->prepare("INSERT INTO carros (marca, descricao, motor) VALUES (:marca, :descricao, :motor)");

$marca="Volvo";
$descricao="XC60";
$motor="26";

$stmt->bindParam(":marca", $marca);
$stmt->bindParam(":descricao", $descricao);
$stmt->bindParam(":motor", $motor);

$stmt->execute();

?>