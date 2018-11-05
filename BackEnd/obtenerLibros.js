$(document).ready(function(){
    $.ajax({
        url:'BackEnd/obtenerLibros.php',
        type:'GET',
        success:function(respuesta){
           respuesta1=JSON.parse(respuesta);
           console.log(respuesta1);
           for(respuestas of respuesta1)
           $('#slcLibros').append(`<option value=${respuestas.id}>${respuestas.nombre}</option>`);
          //<option>1</option>
        }
    });
})
$('#nombreElemento').click(function(){
        
})