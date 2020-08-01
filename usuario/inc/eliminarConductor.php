<?php
    include 'conexionbd.php';
    $conection = conect();
    $rut = $_GET['rut'];
    
    $eliminar = "DELETE FROM conductor WHERE rut = '$rut';";
    
    $resultado = mysqli_query($conection, $eliminar);

    if($resultado){
        echo "<script>alert('Eliminado con exito'); </script>";
        header('Location: ../conductoresDisponibles.php');
    }
?>