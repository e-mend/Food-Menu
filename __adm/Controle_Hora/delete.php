<?php

require('../../config/conexao_db.php');

$MT = '';

$sql = "UPDATE funcionario SET Comida='$MT'";

if(mysqli_query($conn, $sql)){
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($conn);
} 

mysqli_close($conn);

header('Location: Controller.php');