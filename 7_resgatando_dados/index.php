<?php

//CONEXÃO com o banco
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);

$id=4;

$stmt=$conn->prepare("SELECT * FROM carros WHERE id >?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result=$stmt->get_result();
$data=$result->fetch_all();

echo "<pre>";
print_r($data);

?>