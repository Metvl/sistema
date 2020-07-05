<?php
    include 'conexionbd.php';
    //recibe datos y almacenarlos.
    $conection = conect();
    $rut = $_POST["rut"];
    $password = $_POST["password"];
    $estado = 0;
    $hash = password_hash($password, PASSWORD_BCRYPT);
    
    //consulta sql inssertar
    $insertar = "INSERT INTO  conductor (rut, password, estado) VALUES ('$rut','$hash', '$estado');";
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
