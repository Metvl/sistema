<?php
    include 'conexionbd.php';
    $conection = conect();
    $rut = $_GET["rut"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    
    $actualizar = "UPDATE conductor SET nombre='$nombre',apellido='$apellido',correo='$correo', telefono='$telefono', direccion='$direccion' WHERE rut='$rut';";
    
    $resultado = mysqli_query($conection, $actualizar);

    if(!$resultado){
        echo "<script>alert('ERROR al actualizar'); </script>";
        header('Location: ../conductoresDisponibles.php');
    }else{
        echo "<script>alert('Los datos se han actualizado con éxito'); </script>";
        header('Location: ../conductoresDisponibles.php');
        
    }

?>