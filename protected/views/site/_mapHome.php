
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBhh9bdv02x8XPknaSceyUsPFrz6ap4SE&sensor=false" type="text/javascript"></script>
 
 <script type="text/javascript">

var icon = new google.maps.MarkerImage("../images/mano.png",
   new google.maps.Size(50, 50), new google.maps.Point(0, 0),
   new google.maps.Point(16, 32));

 var center = null;
 var map = null;
 var currentPopup;
 var bounds = new google.maps.LatLngBounds();
 var markersArray = [];

 function clearOverlays() {
  for (var i = 0; i < markersArray.length; i++ ) {
    markersArray[i].setMap(null);
  }
  markersArray.length = 0;
}
  
/* agrego marcador */

 function addMarker(lat, lng, info) {
   var pt = new google.maps.LatLng(lat, lng);
   bounds.extend(pt);
   
   var marker = new google.maps.Marker({
     position: pt,
     icon: icon,
     map: map
   });

   var popup = new google.maps.InfoWindow({
     content: info,
   
   });
   
   google.maps.event.addListener(marker, "click", function() {
     if (currentPopup != null) {
       currentPopup.close();
       currentPopup = null;
     }
     popup.open(map, marker);
     currentPopup = popup;
   });
   
   google.maps.event.addListener(popup, "closeclick", function() {
     map.panTo(center);
     currentPopup = null;
   });
 }

/* -- */

var myOptions = {
    
     center: new google.maps.LatLng(0, 0),
     zoom: 10,
     scrollwheel: false,
     mapTypeId: google.maps.MapTypeId.ROADMAP,
     mapTypeControl: false,
     mapTypeControlOptions: {
       style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
     },

     navigationControl: true,
     navigationControlOptions: {
       style: google.maps.NavigationControlStyle.SMALL
     }
   }

function initMap() {

<?php 

if (isset($_REQUEST['idTipo']) and $_REQUEST['idTipo']!= 'null') {

        $propiedades = Propiedades::getPropiedades($_REQUEST['idTipo'],$_REQUEST['idCondicion'],$_REQUEST['idLocalidad']); 

      } else {

        $propiedades = Propiedades::getPropiedadesTodas();            

      };

?>

window.parent.$('#cantEncontrados').html("<?php echo count($propiedades) ?>");

<?php if (count($propiedades)>0) : ?>

map = new google.maps.Map(document.getElementById("map"), myOptions);

<?php

foreach ($propiedades as $propiedad) {
  
    $imagenes = Propiedadesimagenes::getImagen($propiedad->idPropiedad);

    if ($imagenes) {
      
      //$imagen = '<img style="max-width:220px" src="'.URLRAIZ.'/pics/propiedades/'.$imagenes[0]['imagen'].'" alt="'.$propiedad->titulo.'" >';
       
      $imagen = URLRAIZ.'/pics/propiedades/'.$imagenes[0]['imagen'];

    } else {
       //$imagen = '<img style="max-width:220px" src="'.URLRAIZ.'/images/no-image.png" >'; 
      $imagen = URLRAIZ.'/images/no-image.png';
    }  
    
     $tooltip = '<div id="" class="map-popup-content-wrapper" style="display: block;"><div class="map-popup-content"><div class="listing-window-image-wrapper"><a href="'.URLRAIZ.'/site/propiedadDetalle/'.$propiedad->idPropiedad.'" target="_parent"><div class="listing-window-image" style="background-image: url('.$imagen.');"></div><div class="listing-window-content"><div class="info"><h2>'.$propiedad->titulo.'</h2><h3>'.$propiedad->tipo->nombre.' - '.$propiedad->condicion->nombre.'</h3></div></div></a></div></div></div>';


  echo ("addMarker($propiedad->map,'$tooltip');\n");
  
  }

 ?> 
 
//center = bounds.getCenter();
map.fitBounds(bounds);
//zoom = 3;

<?php else : ?>

document.write("<h3 style='padding-top:15%; text-align:center; font-family: Arial,Helvetica,sans-serif; font-size: 23px;'>No se encontraron Propiedades<br>con las opciones seleccionadas.</h3>");

<?php endif ?>

}


</script>
</head>
<body onload="initMap()" style="margin:0px; border:0px; padding:0px;">
  <div id="map"></div>
  <div id="divEncontrados"> <br>  </div>
</html>

 <style type="text/css">
  
.map-popup-content-wrapper {
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  /*display: none;*/
  /*left: -100px;
  top: -210px !important;*/
  /*position: absolute;*/
  z-index: 9999; }
  
.map-popup-content-wrapper:after {
    border: 7px solid transparent;
    border-top-color: #fff;
    bottom: -14px;
    content: '';
    display: block;
    height: 0;
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
    width: 0; }

.map-popup-content-wrapper, .leaflet-popup-content-wrapper {
  border-radius: 0;
  margin: 0;
  padding: 0;
  width: 240px; }

.map-popup-content, .leaflet-popup-content {
  background-color: #fff;
  height: 196px;
  margin: 0;
  padding: 0; }
  .map-popup-content a:hover, .leaflet-popup-content a:hover {
    text-decoration: none; }

.listing-window-image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  display: block;
  height: 150px;
  position: relative; }
 
  .listing-window-image:after {
    background-color: rgba(0, 0, 0, 0.3);
    bottom: 0;
    content: '';
    display: block;
    left: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: opacity .15s linear;
    visibility: hidden;
    z-index: 100; }
  
  .listing-window-image:before {
    -webkit-font-smoothing: antialiased;
    background-color: #06a7ea;
    border-radius: 50%;
    color: #fff;
    content: '+ INFO';
    display: block;
    height: 32px;
    left: 50%;
    line-height: 30px;
    opacity: 0;
    position: absolute;
    text-align: center;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    transition: opacity .15s linear;
    visibility: hidden;
    width: 32px;
    z-index: 101;
    font-weight: 600;
     }
  
  .map-popup-content-wrapper:hover .listing-window-image:before, .map-popup-content-wrapper:hover .listing-window-image:after, .leaflet-popup-content-wrapper:hover .listing-window-image:before, .leaflet-popup-content-wrapper:hover .listing-window-image:after {
    opacity: 1;
    visibility: visible; }

.listing-window-content h2, .listing-window-content h3 {
  display: block;
  color: #323232; }

.listing-window-content h2 {
  display: block;
  font-size: 1.1em;
  font-weight: 700;
  line-height: 1.5;
  /*margin: 8px 15px;*/
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.listing-window-content h3 {
  background-color: #06a7ea;
  border-radius: 3px;
  color: #fff;
  display: inline-block;
  font-size: 1em;
  font-weight: 700;
  left: 15px;
  margin: 0;
  padding: 4px 8px;
  position: absolute;
  top: 15px; }

/*.gm-style-iw + div {display: none;}*/

.gm-style .gm-style-iw {
    top: 1px !important;
    left: 1px !important;

}





   body { font: normal 10pt Helvetica, Arial; }
   #map { width: 100%; height: 100%; border: 0px; padding: 0px; }
   .Estilo2 {
    color: #FF2A70;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    font-weight: bold;
}

.eventosTitulo {
  font-size: 14px;
  line-height: 1.5;
  color: #555;
}

.eventos {
  font-size: 13px;
  line-height: 1.5;
  color: #555;
}

.precio {
  font-size: 13px;
  line-height: 1.5;
  color: #555;
}

.pepe h3 {
   font-family: Arial, Helvetica, sans-serif;
    font-size: 35px;
    font-family: "Oswald";
}

.comment-meta-reply {
    color: #fff;
    float: right;
    font-size: .9em;
    font-weight: 700;
    margin: 0 0 15px 0;
}

.comment-meta-reply a {
    background-color: #0BB7A5;
    border-radius: 3px;
    color: #fff;
    transition: background-color .15s linear;
    padding: 4px 8px;
}

.gm-style .gm-style-iw {
    top: 7px !important;
    left: 7px !important;
}




</style>

