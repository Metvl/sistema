<?php
    function conect(){
        $conection =  mysqli_connect("localhost","root","","bdtransporte");
        if(!$conection){
            echo'Error al conectar a la base de datos';
        }else{
            return $conection;
        }
    }
?>