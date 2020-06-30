<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Transporte</title>
    <link rel="icon" href="img/icono.ico">
    <!-- FRAMEWORK BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="css/estilos.css">
    <!--JS-->

</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-4 formulario">
                <form action="" method="" class="">
                    <div class="form-group text-center">
                        <h1 class="titulo">¿Olvido su contraseña?</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" class="form-control" placeholder="RUT" maxlength="10" id="rut" name="rut" oninput="checkRut(this)" required>
                        <script src="validarRUT.js"></script>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="password" class="form-control" placeholder="Contraseña nueva" maxlength="12" id="password" name="password" required>
                    </div>
                    <div class="form-group mx-sm-4 btnAzul">
                        <input type="submit" class="btn btn-block btnAzul" value="Guardar Cambios">
                    </div>
                    <div class="division mx-sm-4"></div>
                    <div class="form-group text-center mt-2">
                        <span><a href="loginUsuario.php" class="btnGris">Atrás</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
