$(function() {
        $('.map').maphilight({fade: false});
});

function muestraEstado(estado){
    var estados = new Array();
    estados[1] = 'Aguascalientes';
    estados[2] = 'Baja California';
    estados[3] = 'Baja California Sur';
    estados[4] = 'Campeche';
    estados[5] = '55555';
    $("#mapaOver").css("background-image", "url(images/"+estado+".png)");  
    $("#mapaOver").css("height", "25px");  
    $("#mapaOver").css("width", "25px");  
    $("#mapaOver").css("top", "330px");  
    $("#mapaOver").css("left", "266px");  
    $('#mapaOver').unbind('click');
    $("#mapaOver").click(function(){alert('huevos');});  
    
    
    $(function() {
        $('.map').maphilight({fade: true});
});
    $('#nombre').toggle();
    $('#nombre').html(estados[estado]);
    $('#nombre').fadeIn('slow');
}

function datosEstado(estado){
    alert('huevos');
}

function original(){
    $("#mapa").html('<img src="images/mapa.png"  class="map" usemap="#world">');
}