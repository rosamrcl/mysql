<?php

//CONEXÃO com o banco
$host= "localhost";
$user= "root";
$pass="";
$db="teste";

$conn= new mysqli($host,$user, $pass, $db);
$q1=("CREATE TABLE IF NOT EXISTS categoria(
id INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR (100) NOT NULL");

$q2=("CREATE TABLE IF NOT EXISTS produto(
id INT PRIMARY KEY AUTO_INCREMENT, 
nome VARCHAR (100) NOT NULL,
quantidade INT NOT NULL,
valor INT NOT NULL,
categoria_id INT NOT NULL, 
FOREIGN KEY (categoria_id) REFERENCES categoria (id)");

$conn->query("INSERT INTO categoria (nome) VALUES ('Arroz'),('Fruta'),('Pão')");

$conn->query("INSERT INTO categoria (nome, quantidade, valor, categoria, categoria_id) VALUES ('Pão Francês'),50,120,3");

$conn->query($q1);
$conn->query($q2);

?>