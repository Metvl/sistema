<?php
    include 'conexionbd.php';
    //recibe datos y almacenarlos.
    $conection = conect();
    $patente = $_POST["patente"];
    $serieMotor = $_POST["serieMotor"];
    $capacidadCarga = $_POST["capacidadCarga"];
    $descripcionVehiculo = $_POST["descripcionVehiculo"];
    $estado = 0;
    
    $insertar = "INSERT INTO vehiculo (patente, serieMotor, capacidadCarga, descripcionVehiculo, estado) VALUES('$patente', '$serieMotor', '$capacidadCarga', '$descripcionVehiculo', '$estado');";
    
    $resultado = mysqli_query($conection, $insertar);
    
    if(!$resultado){
        echo 'Error al registrar el vehiculo';
    }else{
        header('Location: ../vehiculo/InicioVehiculo.php?success=1');
    }
    mysqli_close($conection);
?>