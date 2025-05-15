<?php

$host= "localhost";
$db="teste3";
$user= "root";
$pass="";

$conn= new mysqli($host,$user, $pass, $db);

$conn->query("CREATE TABLE IF NOT EXISTS categoria(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100));
");

$conn->query("CREATE TABLE IF NOT EXISTS produto(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    quantidade INT NOT NULL,
    valor INT NOT NULL,
    categoria_id INT NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id));
");

$stmt=$conn->prepare("INSERT INTO categoria (nome) VALUES(?)");
$categorias=['Arroz', 'Fruta', 'Pão'];

foreach($categorias as $categoria){
    $stmt->bind_param("s",$categoria);
    $stmt->execute();
}

$stmt->close();

$stmt = $conn->prepare("INSERT INTO produto(nome, quantidade, valor, categoria_id) VALUES(?,?,?,?)");
$nome_produto="Pão Francês";
$quantidade=50;
$valor=120;
$categoria_id = 3;

$stmt->bind_param("siii", $nome_produto, $quantidade, $valor, $categoria_id);
$stmt->execute();
$stmt->close();

$conn->close();


?>