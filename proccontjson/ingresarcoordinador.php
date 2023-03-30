<?php
if($_SERVER["REQUEST METHOD"]=="POST"){
    require_once 'conexion.php';
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $fechaNac = $_POST["fechaNac"];
    $titulo = $_POST["titulo"];
    $email = $_POST["email"];
    $carrera = $_POST["carrera"];
    $facultad = $_POST["facultad"];
    $my_query = "insert into coordinador(nombres, apellidos, fechaNac, titulo, email, carrera, facultad)
    values('".$nombres."', '".$apellidos."', '".$fechaNac."', '".$titulo."', '".$email."', '".$carrera."', '".$facultad."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Coordinador guardado correctamente";
    }else{
        echo "Error al guardar coordinador";
    }
}else{
    echo "Error";
}
?>