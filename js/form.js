
const nuevo = [];
var data = '';
var div = document.getElementById('colaboradores');

var colaboradores = [
    'RICARDO RODRÍGUEZ ERICK',
    'GALLEGOS SALMERÓN DANIEL STALIN',
    'NUÑEZ GÓMEZ STEVEN MIGUEL',
    'SALAS CAMPUZANO JOSELYN MADELAINE',
    'BRIONES DUARTE DAIVI ALEXANDER'

];


for (var i = 0; i < colaboradores.length; i++) {
    data += '<p class="mb-0"><a href="#">' + colaboradores[i] + '</a></p>';
}
div.innerHTML = data;

function validarEmail(email) {
    expresion = /\w+@\w+\.+[a-z]/;
    if (!expresion.test(email)) {
        return false;
    }
    return true;
}

function validarCell(celular) {
    if (celular.length == 10) {
        return true;
    }
    return false;
}

function soloNumeros(e) {
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}

function limpiar(formId) {
    var myForm = document.forms[formId].getElementsByTagName("input");
    for (let i = 0; i < myForm.length; i++) {
        myForm[i].value = '';
    }
}

function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function ingresarCliente(formId) {
    var myForm = document.forms[formId].getElementsByTagName("input");
    var acu = 0;

    var div = document.getElementById('nuevoColaborador');
    var data = '';

    for (let i = 0; i < myForm.length; i++) {
        if (myForm[i].value == '') {
            acu += 1;
        }
    }

    console.log(acu)

    if (acu > 0) {
        alert('Uno de los campos esta vacio.')
    } else {
        if (validarEmail(myForm[1].value) == false || validarCell(myForm[2] == false)) {
            alert('Correo inválido.')
        } else {
            nuevo.push(myForm[0].value)
            for (var j = 0; j < nuevo.length; j++) {
                data += '<p class="mb-0"><a href="#">' + nuevo[j] + '</a></p>';
            }
            div.innerHTML = data;
            limpiar(formId);
        }
    }

}

function login() {
    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    console.log(user, pass)
    if (user == 'admin' && pass == 'admin') {
        window.location = 'inicio.html';
    } else {
        alert('Credenciales incorrectas!')
    }
}