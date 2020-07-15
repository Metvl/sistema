function validarVehiculo() {
    var patente, serieMotor, capacidadCarga, descripcionVehiculo, estado, expresionPatente;
    patente = document.getElementById("patente").value;
    serieMotor = document.getElementById("serieMotor").value;
    capacidadCarga = document.getElementById("capacidadCarga").value;
    descripcionVehiculo = document.getElementById("descripcionVehiculo").value;
    estado = document.getElementById("estado").value;
    
    expresionPatente = /^[A-Z]{2,4}\-[\d]{2,4}$/;

    if (patente === "" || serieMotor === "" || capacidadCarga === "" || descripcionVehiculo ==="") {
        alert("Los campos son obligatorios");
        return false;
    } else if (patente.length > 7) {
        alert("La patente es muy larga");
        return false;
    } else if (!expresionPatente.test(patente)) {
        alert("La patente EJ: ASDA-12 o AS-1234");
        return false;
    } else if (serieMotor.length <= 4) {
        alert("Serie de motor inválida");
        return false;
    }
}
 
    
