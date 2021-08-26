$(document).ready(function () {
    $("#tabla-rol").on('submit', '.form-eliminar', function (e) {
        e.preventDefault();
        const form = $(this);
        $.confirm({
            theme: 'dark',
            columnClass: 'col-md-6 col-md-offset-3',
            icon: 'fa fa-exclamation-triangle',
            title: '¿ Está seguro que desea eliminar el registro ?',
            content: "Esta acción no se puede deshacer!",
            type: 'red',
            
            buttons: {
                relizar:{
                    btnClass: 'btn-success',
                    action: function () {
                        ajaxRequest(form);
                    }

                },
                
                cancelar: {
                    btnClass: 'btn-danger',
                    action: function () {
                       
                    }
                },
                
                
            }
        });
        
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (respuesta) {
                if (respuesta.mensaje == "ok") {
                    form.parents('tr').remove();
                    Genetica.notificaciones('El registro fue eliminado correctamente', 'Genetica', 'success');
                } else {
                    Genetica.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Genetica', 'error');
                }

            },
            error: function () {

            }
        });
    }
});