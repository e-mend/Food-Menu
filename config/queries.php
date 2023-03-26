<?php

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


$hoje = date('Y/m/d');
$fullj = "SELECT * FROM funcionario LEFT JOIN registros ON funcionario.CODIGO = registros.CODIGO AND DATA = '{$hoje}' WHERE TIPO_FUNCIONARIO = 'CONTRATADO'";
$fulljair = $conn->query($fullj) or die($conn->error);

$foody = "SELECT ITENS, ATIVO, Comida, TIPO FROM funcionario WHERE TIPO <> 'TAMANHO' AND ITENS <> ''";
$fullfoodyy = $conn->query($foody) or die($conn->error);

$fullleft = "SELECT ITENS, ATIVO, TIPO FROM funcionario WHERE TIPO <> 'TAMANHO' AND ITENS <> ''";
$lefty = $conn->query($fullleft) or die($conn->error);


?>