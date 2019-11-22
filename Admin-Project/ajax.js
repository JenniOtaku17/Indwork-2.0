$(function () {

$('#form-search').submit(function(e){

e.preventDefault();

})

$("#op").keyup(function(){
   
    var envio = $('#op').val();
    $('#respuesta-q').html('<h4>Cargando</h4>');

$.ajax(
{

type: "POST",
url: "buscar1.php",
data: ('op='+envio),
success: function(respuesta){

    if(respuesta != ''){

    $('#respuesta-q').html(respuesta);

    }
}

});

});

});

$(function () {

    $('#form-search').submit(function(e){
    
    e.preventDefault();
    
    })
    
    $("#filtro").keyup(function(){
    
        var envio2 = $('#filtro').val();
    
    $.ajax(
    {
    
    type: "POST",
    url: "buscar1.php",
    data: ('filtro='+envio2),
    success: function(respuesta){
    
        if(respuesta != ''){
    
        $('#respuesta-q').html(respuesta);
    
        }
    }
    
    });
    
    });
    
    });
    
    
    







