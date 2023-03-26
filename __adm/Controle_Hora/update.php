<?php

require('../../config/conexao_db.php');
$rnm = rand(10000, 99999);
$tipoo = strtoupper($_POST["tipo"]);

$MT = '';

if(isset($_POST["ITEMZ"])){
    $ITEMZ = strtoupper($_POST["ITEMZ"]);
    $sql = "INSERT INTO funcionario SET CODIGO = '$rnm', NOME = '', FUNCAO = '', 
    EMPRESA = '', TIPO_FUNCIONARIO = '', TURNO = '', Comida = '', ATIVO = '1', ITENS = '$ITEMZ', 
    TIPO = '$tipoo'"; 

if(mysqli_query($conn, $sql)){
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($conn);
} 
}


if(isset($_POST['retirar'])){
    $REMOVE = strtoupper($_POST["retirar"]);
    $sql2 = "UPDATE funcionario SET ITENS = '$MT' WHERE ITENS = '$REMOVE'";

    if(mysqli_query($conn, $sql2)){
        echo "Record was updated successfully.";
    } else {
        echo "ERROR: Could not able to execute22 $sql2. " 
                                . mysqli_error($conn);
    } 
}





mysqli_close($conn);

header('Location: Controller.php');