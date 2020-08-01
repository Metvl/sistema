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
    <title>Editar</title>
    <link rel="icon" href="../img/icono.ico">
    <!-- FRAMEWORK BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../css/tablas.css">
    <!--iconos-->
    <script src="https://kit.fontawesome.com/410536779e.js" crossorigin="anonymous"></script>
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
                <form action="procesarEditarConductor.php" method="POST">
                    <table class="text-center form-group table table-hover table-sm">
                        <caption>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Acción</th>
                        </tr>
                        <!--Consulta sql-->
                        <?php
                            include 'conexionbd.php';
                            $conexion = conect();
                            $rut = $_GET["rut"];
                            $consulta = "SELECT * FROM conductor WHERE rut='$rut';";
                            $resultado = mysqli_query($conexion,$consulta);
                            while($mostrar = mysqli_fetch_array($resultado)){  
                                echo "<tr>
                                        <input name='rut' type='hidden' value='". $mostrar['rut']."'>
                                        <td><input name='nombre' type='text' value='". $mostrar['nombre']."'></td>
                                        <td><input name='apellido' type='text' value='". $mostrar['apellido']."'></td>
                                        <td><input name='correo' type='text' value='". $mostrar['correo']."'></td>
                                        <td><input name='telefono' type='text' value='". $mostrar['telefono']."'></td>
                                        <td><input name='direccion' type='text' value='". $mostrar['direccion']."'></td> 
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
                    <span><a href="../conductoresDisponibles.php" class="btnGris">Atrás</a></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
