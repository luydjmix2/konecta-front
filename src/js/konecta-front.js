// hoja de js

$(document).ready(function (e) {
    // alert('hola');

    $('#formCreateUser').on('submit', function (eventFormCreateUser) {
        eventFormCreateUser.preventDefault();
        // console.log('form cu');
        var settings = {
            "url": "http://127.0.0.1:8000/api/register",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "name": "carlos2",
                "password": "123456789",
                "password_confirmation": "123456789",
                "email": "asd2@asd.asd"
            }),
        };

        $.ajax(settings).done(function (response) {
            console.log(response);
        });
    });

});