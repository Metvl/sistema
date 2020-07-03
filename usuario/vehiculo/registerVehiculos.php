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
    <title>Agregar Autos</title>
    <link rel="icon" href="../img/icono.ico">
    <!-- FRAMEWORK BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../css/estilos.css">
    <!--js-->
</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-4 formulario">
                <form action="../inc/insertVehiculo.php" method="POST" id="" name="" class="" onsubmit="return validarVehiculo();">
                    <div class="form-group text-center">
                        <h1 class="titulo">Registro de vehículos</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-2">
                        <input type="text" class="form-control" placeholder="Patente" maxlength="7" id="patente" name="patente" autocomplete="off" required>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Serie Motor" maxlength="9" id="serieMotor" name="serieMotor" autocomplete="off" required>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Capacidad de Carga" maxlength="15" id="capacidadCarga" name="capacidadCarga" autocomplete="off" required>
                    </div>
                    <div class="form-group mx-sm-4">
                        <textarea class="form-control" name="descripcionVehiculo" id="descripcionVehiculo" cols="" rows="3" placeholder="Descripcion" maxlength="100" autocomplete="off" required></textarea>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="hidden" id="estado" name="estado" required>
                    </div>
                    
                    <div class="form-group mx-sm-4">
                        <input type="submit" class="btn btn-block btnAzul" value="Registrar" id="botonRegistrar" name="subm">
                    </div>
                    <div class="division mx-sm-4"></div>
                    <div class="form-group text-center mx-sm-4 mt-2 mb-0">
                        <span><a href="InicioVehiculo.php" class="btnGris">Atrás</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="js/validarVehiculo.js"></script>
</body>

</html>
