<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cuenta Nueva</title>
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
        <div class="row justify-content-center pt-4 mt-5 m-1 p-0">
            <div class="col-md-4 formulario">
                <form action="inc/insertUsuario.php" method="POST" id="" name="" class="" onsubmit="return validar();">
                    <div class="form-group text-center">
                        <h1 class="titulo">
                            <i class="fas fa-user-plus"></i>
                            <p>Registro</p>
                        </h1>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="RUT" maxlength="10" id="rut" name="rut" oninput="checkRut(this)" autocomplete="off" required>
                        <script src="./js/validarRUT.js"></script>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="password" class="form-control" placeholder="Contraseña" maxlength="12" id="password" name="password" autocomplete="off" required>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="submit" class="btn btn-block btnVerde" value="Registrar" id="botonRegistrar" name="subm">
                    </div>
                    <div class="division mx-sm-4"></div>
                    <div class="form-group text-center mt-2 mb-0">
                        <span><a href="inicioConductores.php" class="btnGris">Atrás</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/validar.js"></script>
</body>

</html>
