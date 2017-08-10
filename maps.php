<!DOCTYPE html>
<html>
  <head>
      <title>Google Maps</title>
    <style>
      html,
      body {
        font-family: Arial, sans-serif;
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        // Constructor creates a new map - only center and zoom are required.
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 40.7413549, lng: -73.9980244},
          zoom: 13
        });
        var tribeca = {lat: 40.719526, lng: -74.0089934};
        var marker = new google.maps.Marker({
          position: tribeca,
          map: map,
          title: 'First Marker!'
        });
      }
      
 /*var geocoder;
var map;
var marker;

  function initialize() {
    var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
    var options = {
        zoom: 5,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("mapa"), options);

    geocoder = new google.maps.Geocoder();

    marker = new google.maps.Marker({
        map: map,
        draggable: true,
    });

    marker.setPosition(latlng);
}

// verifica se o navegador tem suporte a geolocalização
if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position){ // callback de sucesso
        // ajusta a posição do marker para a localização do usuário
        marker.setPosition(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
    }, 
    function(error){ // callback de erro
       alert('Erro ao obter localização!');
       console.log('Erro ao obter localização.', error);
    });
} else {
    console.log('Navegador não suporta Geolocalização!');
}

$(document).ready(function () {
    initialize();
});*/
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUrjcYDW8ztOKyw8_OCYl1vQRMVF8XgaQ&callback=initMap">
    </script>

  </body>
</html>
