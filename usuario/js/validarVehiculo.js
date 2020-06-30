function validar() {
    var patente, serieMotor, capacidadCarga, expresionPatente;

    patente = document.getElementById("patente").value;
    serieMotor = document.getElementById("serieMotor").value;
    capacidadCarga = document.getElementById("capacidadCarga").value;

    expresionPatente = /^[A-Za-z]{2,4}\-[\d]{2,4}$/;

    if (patente === "" || serieMotor === "" || capacidadCarga === "") {
        alert("Los campos son obligatorios");
        return false;
    } else
    if (patente.length > 7) {
        alert("La patente es muy larga");
        return false;
    } else if (!expresionPatente.test(patente)) {
        alert("El formato de la patente no es válido");
        return false;
    } else if (serieMotor.length !== 17) {
        alert("Serie de motor inválida");
        return false;
    }
}
