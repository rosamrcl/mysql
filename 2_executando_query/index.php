<?php
$host= "localhost";
$user= "root";
$pass="";
$db="banco_teste";

//EXECUTAR QUERY
$conn= new mysqli($host,$user, $pass, $db);

$sql="SELECT * FROM carros";

$result=$conn->query($sql);

print_r($result);

?>