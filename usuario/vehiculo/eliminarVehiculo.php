<?php
    include '../inc/conexionbd.php';
    $conection = conect();
    $patente = $_GET['patente'];
    
    $eliminar = "DELETE FROM vehiculo WHERE patente = '$patente';";
    
    $resultado = mysqli_query($conection, $eliminar);

    if($resultado){
        echo "<script>alert('Eliminado con exito'); </script>";
        header('Location: disponible.php');
    }
?>