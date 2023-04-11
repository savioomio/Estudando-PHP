<?php

$servername = "localhost"; 
$username = "root";  
$password = "";  
$dbname = "teste_pesquisa"; 

// Criando conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checando conexão
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}

?>