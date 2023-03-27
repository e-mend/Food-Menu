<?php

require("../config/conexao_db.php");

// foreach($_POST['checkbox'] as $checkbox){
//     echo $checkbox . '<hr>';
// }

// var_dump($_POST);

// echo "<hr>";

$checkBoxValue = join(", ", $_POST['checkbox']);
$name = $_POST["colaborador"];
$tamanho = $_POST["tamanho"];
$CARNE = $_POST["carne"];

if(isset($_POST["MARMITA"])){
    $COMPLETO = $_POST["MARMITA"];
    $Output = "$COMPLETO " . "$tamanho, " . "$CARNE."; 
}else{
    $SEPARADOR = join(", ", $_POST['checkbox']);
    $Output = "$SEPARADOR, " . "$tamanho, " . "$CARNE."; 
}

$Output = strtoupper($Output);

$sql = "UPDATE funcionario SET COMIDA='$Output' WHERE NOME='$name'";

if(mysqli_query($conn, $sql)){
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($conn);
} 

mysqli_close($conn);

// header('Location: index.php');

