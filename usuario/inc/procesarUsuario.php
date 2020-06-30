<?php
// login.php
session_start();
include "conexionbd.php";

if(isset($_POST['subm'])){
    $conection = conect();
    $rut = mysqli_real_escape_string($conection,$_POST['rut']);
    $password = mysqli_real_escape_string($conection,$_POST['password']);
    
    /*$sql = $conection->query("SELECT rut, password FROM conductor WHERE rut='$rut';"); 
    if ($sql->num_rows>0){
        $data = $sql->fetch_array();
        if(passoword_verify($password,$data['password'])){
            $_SESSION['rut'] = $rut;
            header('Location: ../inicioUsuario.php');
        }
    }*/
        
    
    if ($rut != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from conductor where rut='".$rut."' and password='".$password."'";
        $result = mysqli_query($conection,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['rut'] = $rut;
            header('Location: ../inicioUsuario.php');
        }else{
            
            header('Location: ../loginUsuario.php?error=1');
            
        }
    }
}
?>
