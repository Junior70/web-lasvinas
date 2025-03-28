$(document).ready(function() {

    var time = 7; // time in seconds --tiempo de ejecucion

    var $progressBar,
        $bar,
        $elem,
        isPause,
        tick,
        percentTime;

    //Init the carousel --Inicia el carrusel
    $("#owl-banner").owlCarousel({
        slideSpeed: 500,
        paginationSpeed: 500,
        singleItem: true,
        afterInit: progressBar,
        afterMove: moved,
        startDragging: pauseOnDragging,
        //navigation : true, //Mostrar botones siguiente y anterior 
        // navigationText: [
        //   "<i class='fa fa-angle-left'></i>",
        // "<i class='fa fa-angle-right'></i>"
        //],	  
        //slideSpeed : 300,
        //paginationSpeed : 400,
        //singleItem:true,
        //scrollPerPage: true
    });



    //Init progressBar where elem is $("#owl-banner") 
    //Inicia barra de progreso donde elem es $("#owl-banner") 
    function progressBar(elem) {
        $elem = elem;
        //build progress bar elements 
        //construir elementos de la barra de progreso
        buildProgressBar();
        //start counting --comienza a contar
        start();
    }

    //create div#progressBar and div#bar then prepend to $("#owl-banner")
    //crea div # progressBar y div # bar y luego antepone a
    function buildProgressBar() {
        $progressBar = $("<div>", {
            id: "progressBar"
        });
        $bar = $("<div>", {
            id: "bar"
        });
        $progressBar.append($bar).prependTo($elem);
    }

    function start() {
        //reset timer --restablecer temporizador
        percentTime = 0;
        isPause = false;
        //run interval every 0.01 second 
        //intervalo de ejecución cada 0.01 segundo
        tick = setInterval(interval, 10);
    };

    function interval() {
        if (isPause === false) {
            percentTime += 1 / time;
            $bar.css({
                width: percentTime + "%"
            });
            //if percentTime is equal or greater than 100 
            //si percentTime es igual o mayor que 100
            if (percentTime >= 100) {
                //slide to next item 
                //desliza al siguiente elemento 
                $elem.trigger('owl.next')
            }
        }
    }

    //pause while dragging 
    //pausa mientras arrastras
    function pauseOnDragging() {
        isPause = true;
    }

    //moved callback
    // devolución de llamada movida
    function moved() {
        //clear interval
        // intervalo claro
        clearTimeout(tick);
        //start again
        //empezar de nuevo
        start();
    }

    // descomenta esto para hacer una pausa al pasar el mouse 
    // $elem.on('mouseover',function(){
    //   isPause = true;
    // })
    // $elem.on('mouseout',function(){
    //   isPause = false;
    // })
});



//Variable que almacena las coordenadas
var direccion_lima1 = new google.maps.LatLng(-12.046193, -77.032778);
// Función para inicializar el mapa
function initializemap1() {
    var mapProp = {
        center: direccion_lima1, //Muestra las coordenadas al centro del mapa
        zoom: 16, //Zoom del mapa 
        mapTypeId: google.maps.MapTypeId.ROADMAP // Tipo de mapa: ROADMAP, SATELLITE, HYBRID, TERRAIN 
    };
    // Creamos un mapa en el contenedor con id map_lima,  usando los parámetros de la variable mapProp
    var map = new google.maps.Map(document.getElementById("googlemap1"), mapProp);
    var myCity = new google.maps.Circle({
        center: direccion_lima1, //Muestra las coordenadas al centro del mapa
        radius: 150, //Especifica el radio del círculo, en metros
        strokeColor: "#0080FF", //Especifica un color hexadecimal para la línea alrededor del círculo (formato: "#FFFFFF")
        strokeOpacity: 0.8, //Especifica la opacidad del color del trazo (un valor entre 0,0 y 1,0)
        strokeWeight: 2, //Especifica el grosor del trazo de la línea en píxeles
        fillColor: "#0080FF", //Especifica un color hexadecimal para el área dentro del círculo (formato: "#FFFFFF")
        fillOpacity: 0.4, //Especifica la opacidad del color de relleno (un valor entre 0,0 y 1,0)
        editable: false //Define si el círculo es editable por los usuarios (verdadero / falso)
    });
    myCity.setMap(map); //Mostramos el circulo en el mapa utilizando el método setMap()
    //Mostramos el marcador en las coordenadas almacenada en la variable direccion_lima
    var marker = new google.maps.Marker({
        position: direccion_lima1,
    });
    marker.setMap(map); //Añadimos el marcador para el mapa utilizando el método setMap()
    // Mostramos nuestro texto
    var infowindow = new google.maps.InfoWindow({
        content: '<br><strong style="color:#92B211;">Local</strong><h6 style="color:#99FF00;">Jr. Camana 371 - Las Viñas</h6>'
    });
    //infowindow muestra el contenido (generalmente texto o imágenes) en una ventana emergente por encima del mapa
    infowindow.open(map, marker);
}
//Mostramos el mapa una vez que cargue el navegador, con el evento addDomListener de Google Maps API
google.maps.event.addDomListener(window, 'load', initializemap1);




//Variable que almacena las coordenadas
var direccion_lima2 = new google.maps.LatLng(-12.047534, -77.029479);
// Función para inicializar el mapa
function initializemap2() {
    var mapProp = {
        center: direccion_lima2, //Muestra las coordenadas al centro del mapa
        zoom: 16, //Zoom del mapa 
        mapTypeId: google.maps.MapTypeId.ROADMAP // Tipo de mapa: ROADMAP, SATELLITE, HYBRID, TERRAIN 
    };
    // Creamos un mapa en el contenedor con id map_lima,  usando los parámetros de la variable mapProp
    var map = new google.maps.Map(document.getElementById("googlemap2"), mapProp);
    var myCity = new google.maps.Circle({
        center: direccion_lima2, //Muestra las coordenadas al centro del mapa
        radius: 150, //Especifica el radio del círculo, en metros
        strokeColor: "#0080FF", //Especifica un color hexadecimal para la línea alrededor del círculo (formato: "#FFFFFF")
        strokeOpacity: 0.8, //Especifica la opacidad del color del trazo (un valor entre 0,0 y 1,0)
        strokeWeight: 2, //Especifica el grosor del trazo de la línea en píxeles
        fillColor: "#0080FF", //Especifica un color hexadecimal para el área dentro del círculo (formato: "#FFFFFF")
        fillOpacity: 0.4, //Especifica la opacidad del color de relleno (un valor entre 0,0 y 1,0)
        editable: false //Define si el círculo es editable por los usuarios (verdadero / falso)
    });
    myCity.setMap(map); //Mostramos el circulo en el mapa utilizando el método setMap()
    //Mostramos el marcador en las coordenadas almacenada en la variable direccion_lima
    var marker = new google.maps.Marker({
        position: direccion_lima2,
    });
    marker.setMap(map); //Añadimos el marcador para el mapa utilizando el método setMap()
    // Mostramos nuestro texto
    var infowindow = new google.maps.InfoWindow({
        content: '<br><strong style="color:#92B211;">Local</strong><h6 style="color:#99FF00;">Jr. Lampa 406 - Las Viñas</h6>'
    }); //92B211
    //infowindow muestra el contenido (generalmente texto o imágenes) en una ventana emergente por encima del mapa
    infowindow.open(map, marker);
}
//Mostramos el mapa una vez que cargue el navegador, con el evento addDomListener de Google Maps API
google.maps.event.addDomListener(window, 'load', initializemap2);