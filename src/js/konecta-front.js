// hoja de js

$(document).ready(function (e) {
    // alert('hola');

    $('#formCreateUser').on('submit', function (eventFormCreateUser) {
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
            window.location = './views/crearsession/?active=1';
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                JSON.parse(jqXHR.responseText, function (k, v) {
                    enableAler('.validForm', k + v);
                });
            }
        });
    });

    $('#formLoginUser').on('submit', function (eventFormLoginUser) {
        eventFormLoginUser.preventDefault();
        var mail = $('#floatingMail').val();
        var pass = $('#floatingPassword').val();
        var settings = {
            "url": "http://127.0.0.1:8000/api/login",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "password": pass,
                "email": mail
            }),
        };

        $.ajax(settings).done(function (response) {
            console.log(response);
            // console.log(response.token);
            setCookie("token", response.token, '1')
            window.location = './../views/crearsession/?active=1&mailU='+mail;
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                JSON.parse(jqXHR.responseText, function (k, v) {
                    enableAler('.validForm', k + v);
                });
            }
        });
    });
});



function enableAler(alertIdenti, message) {
    $(alertIdenti).removeClass('visually-hidden');
    if (message != '') {
        $(alertIdenti).html(message);
    }

}

function disableAler(alertIdenti) {
    $(alertIdenti).removeClass('visually-hidden');
    $(alertIdenti).addClass('visually-hidden');
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

