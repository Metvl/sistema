<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Transporte Olímpico</title>
    <link rel="icon" href="img/icono.ico">
    <!-- FRAMEWORK BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--iconos-->
    <script src="https://kit.fontawesome.com/410536779e.js" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-4 mt-5 m-1">
            <div class="col-md-4 formulario">
                <form action="inc/procesarUsuario.php" method="POST" class="">
                    <div class="form-group text-center">
                        <h1 class="titulo">
                            <i class="fas fa-truck"></i>
                            <p>Transporte</p>
                        </h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" placeholder="RUT" maxlength="10" id="rut" name="rut" oninput="checkRut(this)" autocomplete="off" required>
                        <script src="./js/validarRUT.js"></script>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="password" class="form-control" placeholder="Contraseña" maxlength="12" id="password" name="password" autocomplete="off" required>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="submit" class="btn btn-block btnAzul" name="subm" value="Entrar">
                    </div>
                    <div class="form-group text-center division mx-sm-4">
                        <span><a href="olvidoPass.php" class="btnGris">¿Olvidó su contraseña?</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<footer class="form-group text-center footer">
    <i class="fab fa-github"></i>
    <i class="fab fa-facebook-square"></i>
    <p class="fab fa-instagram"> Francisco Ojeda</p>
</footer>

</html>
