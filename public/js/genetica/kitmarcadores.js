$('.kit_marcador').on('change', function () {
    console.log('estoy dentro');
    var data = {
        marcador_id: $(this).data('marcadorid'),
        kit_id: $(this).val(),
        _token: $('input[name=_token]').val()
    };
    if ($(this).is(':checked')) {
        data.estado = 1
    } else {
        data.estado = 0
    }
    ajaxRequest('/kit-marcador', data);
});

function ajaxRequest (url, data) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (respuesta) {
            
            if (respuesta.respuesta == "El marcador se asigno con el kit") {
                Genetica.notificaciones(respuesta.respuesta, 'success');
            } else {
                Genetica.notificaciones(respuesta.respuesta, 'error');
            }
        }
    });
}