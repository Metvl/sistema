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
                    <i class="fas fa-user-cog"></i>
                    <h2 class="titulo">Editar</h2>
                </div>
                <div class="division mx-sm-4"></div>
                <form action="procesarEditarVehiculo.php" method="POST">
                    <table class="text-center form-group table table-hover table-sm">
                        <caption>
                        <tr>
                            <th>Serie de motor</th>
                            <th>Capacidad de carga</th>
                            <th>Descripcion</th>
                            <th>Acción</th>
                        </tr>
                        <!--Consulta sql-->
                        <?php
                            include '../inc/conexionbd.php';
                            $conexion = conect();
                            $patente = $_GET["patente"];
                            $consulta = "SELECT * FROM vehiculo WHERE patente='$patente';";
                            $resultado = mysqli_query($conexion,$consulta);
                            while($mostrar = mysqli_fetch_array($resultado)){  
                                echo "<tr>
                                        <input name='patente' type='hidden' value='". $mostrar['patente']."'>
                                        <td><input name='serieMotor' type='text' value='". $mostrar['serieMotor']."'></td>
                                        <td><input name='capacidadCarga' type='text' value='". $mostrar['capacidadCarga']."'></td>
                                        <td><input name='descripcionVehiculo' type='text' value='". $mostrar['descripcionVehiculo']."'></td>
                                        <td>
                                        <a> <button type='submit' class='btn btn-primary'>Guardar Cambios</button> </a>
                                        </td>
                                    </tr>";
                            }
                        ?>
                        </caption>
                    </table>
                </form>
                <div class="division mx-sm-4"></div>
                <div class="form-group text-center mt-2 mb-0">
                    <span><a href="disponible.php" class="btnGris">Atrás</a></span>
                </div>
            </div>
        </div>
    </div>
</body>










<!--<body>
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
                        <th>Serie Motor</th>
                        <th>Capacidad de carga</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                    Consulta sql
                    
                    </caption>
                </table>
                <div class="division mx-sm-4"></div>
                <div class="form-group text-center mt-2 mb-0">
                    <span><a href="disponible.php" class="btnGris">Atrás</a></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
