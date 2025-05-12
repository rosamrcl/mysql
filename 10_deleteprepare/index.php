<?php

//CONEXÃO com o banco
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

$conn= new mysqli($host,$user, $pass, $db);

$descricao="Cerato";

$stmt=$conn->prepare("DELETE FROM  carros WHERE descricao=?");

$stmt->bind_param("s", $descricao);
$stmt->execute();
$stmt->close();

?>