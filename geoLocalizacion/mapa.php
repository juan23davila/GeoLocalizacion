<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC6LUtFPZGSxd_7002hqKtSPIBMDyM4W0U&sensor=false">
    </script>
  </head>
  <body onload="initialize()">
        
      <script type="text/javascript">
        <?php
            $array = array($_POST[10],$_POST[11]);
        ?>
            var jsarray   = [];
         <?php
            for($i=0; $i < count($array); $i++ ){
                echo 'jsarray['.$i.'] = "'.$array[$i].'";';
            }
         ?>
         alert(jsarray[0]);   
         alert(jsarray[1]);
            
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(4.5339 , -75.6811),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
    </script>
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>