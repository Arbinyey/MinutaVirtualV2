var usuario = document.getElementById("usuario");
var password = document.getElementById("password");
var error = document.getElementById("error");


function enviarformulario(){
    console.log('Validando usuario...');

    var mensajeError = [];

    if(usuario.value === null || usuario.value === ''){
            mensajeError.push('Ingresa tu usuario');
    }
    if(password.value === null || password.value === ''){
            mensajeError.push('Ingresa tu contraseña');
    }
    error.innerHTML = mensajeError.join(',');
    
    return false;
}