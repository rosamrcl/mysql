<?php

$host= "localhost";
$db="teste2";
$user= "root";
$pass="";

$pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

$pdo->exec("CREATE TABLE IF NOT EXISTS categoria(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100));
");

$pdo->exec("CREATE TABLE IF NOT EXISTS produto(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    quantidade INT NOT NULL,
    valor INT NOT NULL,
    categoria_id INT NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id));
");

$pdo->exec("INSERT INTO categoria (nome) VALUES('Arroz'),('Fruta'),('Pão')");

$pdo->exec("INSERT INTO produto (nome, quantidade, valor, categoria_id) VALUES ('Pão Francês', 50, 120, 3)");

?>