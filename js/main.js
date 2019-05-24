const xhr = new XMLHttpRequest();
const formularioLogin = $('form#formulario-login')[0];

eventListener();

function eventListener() {
    if (formularioLogin != undefined) {
        formularioLogin.addEventListener('submit', leerFormularioLogin);
    }
}

function leerFormularioLogin(e) {
    e.preventDefault();

    const email = $('form#formulario-login #email')[0].value;
    const pass = $('form#formulario-login #password')[0].value;
    const accion = $('form#formulario-login #accion')[0].value;

    if (email != "" && pass != "") {
        const infoUsuario = new FormData();
        infoUsuario.append('email', email);
        infoUsuario.append('password', pass);
        infoUsuario.append('accion', accion);

        loginDB(infoUsuario);
    }
}

function loginDB(infoUsuario) {
    //Abrir Conexion
    xhr.open('POST', 'includes/modelos/modelo-usuario.php', true);

    //Pasar Datos
    xhr.onload = function () {
        if (this.status == 200) {
            //Se llena con los datos retornados de 'includes/modelos/modelo-contacto.php' y se convierte a Object
            const respuesta = (xhr.responseText);
            $('div.formulario .mensaje').remove();

            if (respuesta) {
                location.reload();
            } else {
                $('div.formulario').append('<div class="mensaje text-center alert"></div>');
                $('div.formulario .mensaje').addClass('alert-danger');
                $('div.formulario .mensaje').append('<p>Error al Momento de Iniciar Sesion</p>');
            }
        }
    }

    //Enviar Datos
    xhr.send(infoUsuario);
}