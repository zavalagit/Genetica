/* esta funcion elimina un sierto tiempo los mensajes */
$(document).ready(function () {
    //Cerrar Las Alertas Automaticamente
    $('.alert[data-auto-dismiss]').each(function (index, element) {
        const $element = $(element),
            timeout = $element.data('auto-dismiss') || 5000;
        setTimeout(function () {
            $element.alert('close');
        }, timeout);
    });
    
    //esto es el diseño de los mensajes de tooltip
    $(function () {
        $('body').tooltip({
            selector: '[data-toggle="tooltip"]',
            trigger: 'hover',
            placement: 'top',
            html: true,
            container: 'body'
            
        });
    })
    
});

