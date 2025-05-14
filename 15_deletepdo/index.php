<?php

$host= "localhost";
$db="banco_teste";
$user= "root";
$pass="";

$conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

$id=5;

$stmt=$conn->prepare("DELETE FROM carros WHERE id=:id");

$stmt->bindParam(":id",$id);


$stmt->execute();
$data = $stmt->fetch();

?>