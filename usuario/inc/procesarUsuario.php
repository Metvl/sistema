<?php
// login.php
session_start();
include "conexionbd.php";
$conection = conect();

if(isset($_POST['subm'])){
    $conection = conect();
    $rut = mysqli_real_escape_string($conection,$_POST['rut']);
    $password = mysqli_real_escape_string($conection,$_POST['password']);
    $hash = password_hash($password, PASSWORD_BCRYPT);

   
    if(empty($rut) || empty($password)){
        echo "<script>alert('Error. Ingrese Datos Validos'); </script>";
        echo "<script>window.location.assign('loginUsuario.php');</script>";
    }else{
        
        
        $consulta= "SELECT rut, password FROM conductor WHERE rut='$rut'";
        
        $result = mysqli_query($conection,$consulta);
        $row = mysqli_fetch_array($result);
        
        
        if(password_verify($password, $row['password'])== TRUE){
            $inicioSesion = 1;
            session_start();
            $_SESSION['rut']=$rut;
            $_SESSION['password']= $hash;
            header("location: ../InicioUsuario.php");
        }else{
            $inicioSesion = 0;
            echo "<script>alert('Error en la autentificación'); </script>";
            echo "<script>window.location.assign('../loginUsuario.php');</script>";
        }


    }  
}
?>
