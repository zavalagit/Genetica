

$( '.resaltar' ).click(function() {
    $( this ).toggleClass( "borderrosa" );
    var title = $( this ).attr( "id" );
    var valor = $( this ).attr( "value" );
    var td_analizar = document.querySelectorAll('td[id="'+`${title}`+'"]');
    text = td_analizar[0].innerHTML;
    marked = text.replace(valor,"<mark>"+valor+"</mark>");
    td_analizar[0].innerHTML = marked;
    console.log(valor);
  });



//   var td_analizar = document.querySelectorAll('td');
//   console.log(td_analizar);




// const buttons = document.querySelectorAll('.resaltar');

// console.log(buttons);


// const Resaltar = (e) =>{

//      console.log(e.target.id);
//     document.getElementById(`${e.target.id}`).classList.add("borderrosa");
//     // var id_boton = document.getElementById(`${e.target.id}`);
//     //$('#id_boton').toggleClass("borderrosa borderverde");

    
       
//     //  console.log(id_boton);
// }











// //esta funcion me dice que boton click gurdar o editar
// buttons.forEach((button) => {
//     //cuando le das click a un boton
//     button.addEventListener('click', Resaltar);
    
// });