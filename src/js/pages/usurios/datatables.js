$(document).ready(function (e) {
    $('#table_id').DataTable();
    var table = $('#table_id').DataTable();
    var token = getCookie("token");
    console.log(token);
    var mailU = getCookie("mail");
    console.log(mailU);
    var settings = {
        "url": "http://127.0.0.1:8000/api/user/find/all",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json",
            "Authorization": "Bearer " + token
        },
    };
    var listProfile = { '1': 'Administrador', '2': 'vendedor', '3': 'cliente' };
    // console.log(listProfile[1]);
    $.ajax(settings).done(function (response) {
        console.log(response.user);
        response.user.forEach(element => {
            // console.log(element);
            if (element.id) {
                var rData = [
                    element.id,
                    element.email,
                    element.name,
                    listProfile[element.profile],
                    '<div class="btn-group" role="group" aria-label="Basic example">' +
                    '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal' + element.id + '" data-userId="' + element.id + '">Editar</button>' +
                    '<button type="button" class="btn btn-danger">Eliminar</button>' +
                    '</div>' +
                    '<div class="modal fade" id="exampleModal' + element.id + '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">' +
                    '<div class="modal-dialog modal-lg">' +
                    '<div class="modal-content">' +
                    '<div class="modal-header">' +
                    '<h5 class="modal-title" id="exampleModalLabel">Editar</h5>' +
                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                    '</div>' +
                    '<div class="modal-body">' +
                    '<form action="/" id="formEditUser' + element.id + '" method="post">' +
                    '<div class="row">' +
                    '<div class="col-6">' +
                    '<div class="form-floating my-3">' +
                    '<input type="text" name="floatingNombre" class="form-control" id="floatingNombre' + element.id + '" placeholder="Nombre" value="' + element.name + '" required>' +
                    '<label for="floatingNombre">Nombre</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-6">' +
                    '<div class="form-floating my-3">' +
                    '<input type="mail" name="floatingMail" class="form-control" id="floatingMail' + element.id + '" placeholder="Password" value="' + element.email + '" required>' +
                    '<label for="floatingMail">mail</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-6">' +
                    '<div class="form-floating my-3">' +
                    '<input type="password" name="floatingPassword" class="form-control" id="floatingPassword' + element.id + '" placeholder="Contraseña" value="123456789" required>' +
                    '<label for="floating">Controseña</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-6">' +
                    '<div class="form-floating my-3">' +
                    '<input type="password" name="floatingPasswordConf" class="form-control" id="floatingPasswordConf' + element.id + '" placeholder="Confirmar Contraseña" value="123456789" required>' +
                    '<label for="floatingPasswordConf">Confirmacion Contraseña</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-6">' +
                    '<div class="form-floating my-3">' +
                    '<select name="perfil" class="form-control" id="floatingperfil' + element.id + '" required>' +
                    '<option value="">Selecione una opcion</option>' +
                    '<option value="1">Administrador</option>' +
                    '<option value="2">Vendedor</option>' +
                    '<option value="3">Cliente</option>' +
                    '</select>' +
                    '<label for="floatingperfil">Perfil</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-12">' +
                    '<button class="form-control btn btn-primary" onclick="edit(' + element.id + ')" type="submit">Crear</button>' +
                    '</div>' +
                    '</div>' +
                    '<div class="alert alert-danger visually-hidden validForm my-2" role="alert">' +
                    '</div>' +
                    '</form>' +
                    '</div>' +
                    '<div class="modal-footer">' +
                    '<button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>' +
                    '<button type="button" class="btn btn-primary">Save changes</button>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                ];
                table.row.add(rData).draw(false);
            }
        });
    });

    $('#formCreateUserV').on('submit', function (eventFormCreateUser) {
        eventFormCreateUser.preventDefault();
        // console.log('form cu');
        disableAler('.validForm')

        var nombre = $('#floatingNombre').val();
        var mail = $('#floatingMail').val();
        var pass = $('#floatingPassword').val();
        var passcof = $('#floatingPasswordConf').val();
        var prof = $('#floatingperfil').val();
        var settings = {
            "url": "http://127.0.0.1:8000/api/register",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "name": nombre,
                "password": pass,
                "password_confirmation": passcof,
                "email": mail,
                "profile": prof
            }),
        };

        $.ajax(settings).done(function (response) {
            console.log(response);
            if (console && console.log) {
                location.reload(true);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                JSON.parse(jqXHR.responseText, function (k, v) {
                    enableAler('.validForm', k + v);
                });
            }
        });
    });
});


function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function edit(params) {
    var token = getCookie("token");
    $('#formEditUser' + params).on('submit', function (eventformEditUser) {
        eventformEditUser.preventDefault();
        var nombre = $('#floatingNombre' + params).val();
        var mail = $('#floatingMail' + params).val();
        var pass = $('#floatingPassword' + params).val();
        var passcof = $('#floatingPasswordConf' + params).val();
        var prof = $('#floatingperfil' + params).val();
        var settings = {
            "url": "http://127.0.0.1:8000/api/user/update",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + token
            },
            "data": JSON.stringify({
                "name": nombre,
                "password": pass,
                "password_confirmation": passcof,
                "email": mail,
                "profile": prof
            }),
        };

        $.ajax(settings).done(function (response) {
            console.log(response);
            if (console && console.log) {
                location.reload(true);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                JSON.parse(jqXHR.responseText, function (k, v) {
                    enableAler('.validForm', k + v);
                });
            }
        });
    });
}

function delit(params) {

}
