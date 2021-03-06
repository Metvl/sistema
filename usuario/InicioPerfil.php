<?php
    session_start();
    $varsesion = $_SESSION['rut'];
    if($varsesion == null || $varsesion = ''){
        header("Location: loginUsuario.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="icon" href="img/icono.ico">
    <!-- FRAMEWORK BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--iconos-->
    <script src="https://kit.fontawesome.com/410536779e.js" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-4 formulario">
                <div class="">
                    <div class="form-group text-center pt-3">
                        <h1 class="titulo">
                            <i class="fas fa-user"></i>
                            <p>Perfil</p>
                        </h1>
                    </div>
                    <div class="form-group mx-sm-4">
                        <a href="#" class="btnAzul">
                            <input type="success" class="btn btn-block btnAzul" value="Modificar datos">
                        </a>
                    </div>
                    <div class="form-group mx-sm-4">
                        <a href="./inc/cerrarSesion.php" class="btnRojo">
                            <input type="success" class="btn btn-block btnRojo" value="Cerrar Sesión">
                        </a>
                    </div>
                    <div class="division mx-sm-4"></div>
                    <div class="form-group text-center mt-2 mb-0">
                        <span><a href="InicioUsuario.php" class="btnGris">Atrás</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
