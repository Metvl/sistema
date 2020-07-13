<?php
    include 'conexionbd.php';
    //recibe datos y almacenarlos.
    $conection = conect();
    
    $patente = $_POST["patente"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $rut = $_POST["rut"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $password = $_POST["password"];
    $estado = 0;
    $hash = password_hash($password, PASSWORD_BCRYPT);
    
    //consulta sql inssertar
    $insertar = "INSERT INTO conductor (nombre, apellido, rut, correo, telefono, direccion, password, estado) VALUES ('$nombre','$apellido','$rut','$correo','$telefono','$direccion','$hash', '$estado');";
    //ejercutar la consulta
    $resultado = mysqli_query($conection, $insertar);
    

    if(!$resultado){
        echo "<script>alert('Error fatal'); </script>";
        header('Location: ../InicioUsuario.php'); 
    }else {
        header('Location: ../inicioConductores.php?success=2');
    }
    mysqli_close($conection);
?>
