<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';

    $id = $_POST["id"];
    $my_query = "delete from coordinador where id = '".$id."'";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Coordinador eliminado correctamente";
    }else{
        echo "Error al eliminar coordinador";
    }
}
else{
    echo "Error";
}

?>