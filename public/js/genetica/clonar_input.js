var campos_max          = 10;   //max de 10 campos

$(document).on('click',".clonar",function(e){
    e.preventDefault();
    const marcador_id = $(this).attr('data-id');
    const numero = $('.'+marcador_id+ '> #grupo__valor.input-group').length + 1; 
    //console.log(marcador_id);
    if (numero < campos_max) {
        
            $('.'+marcador_id).append(
                '<div class="input-group" id="grupo__valor">\
                                    <div class="input-group-prepend">\
                                    <label for="valor" class="input-group-text requerido formulario__label" id="inputGroupPrepend">VALOR</label>\
                                    </div>\
                                     <input type="text" name="valor['+marcador_id+']['+numero+']" class="form-control"  placeholder="ingrese valor del marcador" required>\
                                        <a href="#" data-id="'+marcador_id+'" class="remover_campo"><i class="fas fa-times-circle fa-lg text-danger" ></i></a>\
                                        <div class="invalid-feedback">Complete el campo.</div> </div>');
           
    }
    //$(`.marcador_id`).append();
    //console.log(numero);
    
    
 });

 //guncion para eliminar
 $(document).on("click",".remover_campo",function(e) {
                e.preventDefault();
                //var index = $(this).index();
                //const marcador_id = $('#grupo__valor.input-group').parents('.remover_campo');
                const marcador_id = $(this).attr('data-id');
               // var listItem = $( ".remover_campo" );
               // saca la posicion del boton remover_campo
                let posicion_eliminar = $('.'+marcador_id+ '> #grupo__valor.input-group > .remover_campo').index(this) + 1;
                //var input_name = document.querySelector('#grupo__valor.input-group input[name="valor['+marcador_id+']['+posicion_eliminar+']"]').name;
                //saca el total de los inputs menos 1
                const total_inputs = $('.'+marcador_id+ '> #grupo__valor.input-group').length - 1;
                //typeof posicion_eliminar;
                //console.log(typeof posicion_eliminar);

                //console.log("posicion" +posicion_eliminar);
                //console.log("toral" +total_inputs);
                // console.log("toral" +total_inputs);
                // if (posicion_eliminar < total_inputs) {
                //     posicion_eliminar++;
                //     console.log(posicion_eliminar);
                // }
                let n = 0;
                
                for (posicion_eliminar; posicion_eliminar <= total_inputs; posicion_eliminar++) {
                     n = posicion_eliminar + 1;
                     //cambia el nombre del imput por medio del nombre
                    var cambiar_name = document.querySelector('#grupo__valor.input-group input[name="valor['+marcador_id+']['+n+']"]').name = 'valor['+marcador_id+']['+posicion_eliminar+']';
                    //console.log(cambiar_name);
                }
                //const input = $('.'+marcador_id+ '> #grupo__valor.input-group > input'); 
                //const input_name = document.getElementById('input[name="valor[10][1]"]');
                //var index = $('#grupo__valor.input-group > *'); 
                //const x = document.getElementsByClassName('.valor');
                //console.log("kit" +marcador_id);
                //console.log("posicion" +posicion_eliminar);
                //console.log(cambiar_name);
                //console.log("toral" +total_inputs);
                $(this).parent().remove();
                
        });