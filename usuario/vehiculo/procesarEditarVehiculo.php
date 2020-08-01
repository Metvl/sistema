<?php
    include '../inc/conexionbd.php';
    $conection = conect();
    $patente = $_POST["patente"];
    $serieMotor = $_POST["serieMotor"];
    $capacidadCarga = $_POST["capacidadCarga"];
    $descripcionVehiculo = $_POST["descripcionVehiculo"];
   
    $actualizar = "UPDATE vehiculo SET serieMotor='$serieMotor', capacidadCarga='$capacidadCarga', descripcionVehiculo='$descripcionVehiculo' WHERE patente='$patente'";
    
    $resultado = mysqli_query($conection, $actualizar);


    if(!$resultado){
        echo "<script>alert('ERROR al actualizar'); </script>";
        header('Location: ../vehiculo/disponible.php');
    }else{
        echo "<script>alert('Los datos se han actualizado con éxito'); </script>";
        header('Location: ../vehiculo/disponible.php');
        
    }

?>