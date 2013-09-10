<!DOCTYPE html>

        
      <script type="text/javascript">
       
            var latitud = "<? echo $latitud;?>";
            var longitud = "<? echo $longitud;?>";
            
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(latitud , longitud),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
    </script>
    <div id="map_canvas"></div>

