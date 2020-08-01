<?php
    session_start();
    $varsesion = $_SESSION['rut'];
    if($varsesion == null || $varsesion = ''){
        header("Location: ../loginUsuario.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Vehículos Disponibles</title>
    <link rel="icon" href="../img/icono.ico">
    <!-- FRAMEWORK BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../css/tablas.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center pt-5 mt-2 m-1">
            <div class="content">
                <div class="form-group text-center">
                    <h3 class="titulo">Vehículos disponibles</h3>
                </div>
                <div class="division mx-sm-4">
                    
                </div>
                <table class="text-center form-group table table-hover table-sm">
                    <caption>
                    <tr>
                        <th>Patente</th>
                        <th>Serie de Motor</th>
                        <th>Capacidad de carga</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                    <!--Consulta sql-->
                    <?php
                        include '../inc/conexionbd.php';
                        $conexion = conect();
                        $consulta = "SELECT  * FROM vehiculo WHERE estado='0';";
                        $resultado = mysqli_query($conexion,$consulta);
                        while($mostrar = mysqli_fetch_array($resultado)){
                            echo "<tr> 
                                    <td>". $mostrar['patente'] . "</td>
                                    <td>". $mostrar['serieMotor'] . "</td>
                                    <td>". $mostrar['capacidadCarga']."</td>
                                    <td>". $mostrar['descripcionVehiculo']. "</td>
                                    
                                    <td>
                                        <a href='editarVehiculo.php?patente=".$mostrar['patente']."'> <button type='button' class='btn btn-warning'>Editar</button> </a>
                                        
                                        <a href='eliminarVehiculo.php?patente=".$mostrar['patente']."'><button type='button' class='btn btn-danger'>Eliminar</button></a>
                                    </td>
                                </tr>";
                        }
                    ?>
                    </caption>
                </table>
                <div class="division mx-sm-4"></div>
                <div class="form-group text-center mt-2 mb-0">
                    <span><a href="InicioVehiculo.php" class="btnGris">Atrás</a></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
