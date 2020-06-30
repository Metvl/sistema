<?php
    include 'conexionbd.php';
    //recibe datos y almacenarlos.
    $conection = conect();
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $rut = $_POST["rut"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $password = $_POST["password"];
    
    /*$hash = password_hash($password, PASSWORD_BCRYPT);*/
    
    //consulta sql inssertar
    $insertar = "INSERT INTO  conductor (nombre, apellido, rut, correo, telefono, direccion, password) VALUES ('$nombre', '$apellido','$rut','$correo','$telefono','$direccion','$password');";
    //ejercutar la consulta
    $resultado = mysqli_query($conection, $insertar);
    if(!$resultado){
        header('Location: ../loginUsuario.php');
    }else {
        header('Location: ../loginUsuario.php?success=2');
    }
    mysqli_close($conection);
?>
