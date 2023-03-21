<?php
date_default_timezone_set('America/Sao_Paulo');

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "ponto";

$conn = mysqli_connect($server, $user, $pass, $dbname);

$fullname = "SELECT NOME, ID FROM funcionario WHERE TIPO_FUNCIONARIO = 'CONTRATADO'";
$full = $conn->query($fullname) or die($conn->error);

$fullsize = "SELECT ITENS, ATIVO, TIPO FROM funcionario WHERE ATIVO = '1' AND TIPO = 'TAMANHO' ORDER BY ITENS DESC";
$size = $conn->query($fullsize) or die($conn->error);

$fullfood = "SELECT ITENS, ATIVO, TIPO FROM funcionario WHERE ATIVO = '1' AND TIPO = 'ITEM' AND ITENS <> ''";
$food = $conn->query($fullfood) or die($conn->error);

$fullmeat = "SELECT ITENS, ATIVO, TIPO FROM funcionario WHERE ATIVO = '1' AND TIPO = 'CARNE' AND ITENS <> ''";
$meat = $conn->query($fullmeat) or die($conn->error);

$fullorder = "SELECT Comida FROM funcionario";
$order = $conn->query($fullorder) or die($conn->error);


