$( '.resaltar' ).click(function() {
    $( this ).toggleClass( "borderrosa" );
    var title = $( this ).attr( "id" );
    var valor = $( this ).attr( "value" );
    var td_analizar = document.querySelectorAll('td[id="'+`${title}`+'"]');
    //console.log(td_analizar.length);
    for (let index = 0; index < td_analizar.length; index++) {
      if ($(this).hasClass("borderrosa")) {
        text = td_analizar[index].innerHTML;
        marked = text.replace(valor,"<mark>"+valor+"</mark>");
        td_analizar[index].innerHTML = marked;
        
      } else {
        
          td_analizar[index].innerHTML = td_analizar[index].innerHTML.replace(/<\/?mark[^>]*>/g,"");
          //console.log(valor);
      }
      
    }
    
   
  
  });

 