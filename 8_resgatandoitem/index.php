<?php

//CONEXÃO com o banco
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);

$id=5;

$stmt=$conn->prepare("SELECT * FROM carros WHERE id =?");
// $stmt->bind_param("i"=int, $id);
$stmt->bind_param("i", $id);
$stmt->execute();

$result=$stmt->get_result();
// $data=$result->fetch_all();
$data=$result->fetch_row();

echo "<pre>";
print_r($data);
$conn->close();

?>