function validar() {
    var nombre, apellido, rut, correo, telefono, direccion, password, expresionCorreo, expresionNombre;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    rut = document.getElementById("rut").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    direccion = document.getElementById("direccion").value;
    password = document.getElementById("password").value;

    expresionCorreo = /\w+@+[a-z]+\.+[a-z]/;
    expresionNombre = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

    if (nombre === "" || apellido === "" || rut === "" || correo === "" || telefono === "" || direccion === "" || password === "") {
        alert("Los campos son obligatorios");
        return false;
    } else if (nombre.length >= 30 || nombre.length <= 2) {
        alert("Nombre inválido");
        return false;
    } else if (!expresionNombre.test(nombre)) {
        alert("El nombre no debe tener números");
        return false;
    } else if (apellido.length >= 30 || apellido.length <= 2) {
        alert("Apellido inválido");
        return false;
    } else if (!expresionNombre.test(apellido)) {
        alert("El apellido no debe tener números");
        return false;
    } else if (rut.length > 10 || rut.length < 7) {
        alert("Rut inválido");
        return false;
    } else if (!expresionRut.test(rut)) {
        alert("el rut no cumple el formato");
        return false;
    } else if (!expresionCorreo.test(correo)) {
        alert("El correo no cumple el formato");
        return false;
    } else if (telefono.length < 9) {
        alert("Telefono inválido");
        return false;
    } else if (isNaN(telefono)) {
        alert("Teléfono ingresado no es válido");
        return false;
    } else if (direccion.length >= 50 || direccion.length <= 5) {
        alert("Direccion ingresada es invalida");
        return false;
    } else if (password.length >= 12 || password.length <= 6) {
        alert("Contraseña ingresada es inválida");
        return false;
    }
}
