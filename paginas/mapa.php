<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.2463361, lng: -50.0210429};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5eoI32MwD94FYBTXNruW1kAFluM_KiM4&callback=initMap">
    </script>
  </body>
</html>