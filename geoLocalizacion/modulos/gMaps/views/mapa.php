<!DOCTYPE html>


<script type="text/javascript">

    var latitud = "<? echo $latitud; ?>";
    var longitud = "<? echo $longitud; ?>";

    function initialize() {
        var miUbicacion = new google.maps.LatLng(latitud, longitud);
        var mapOptions = {
            center: miUbicacion,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
                mapOptions);

        var marker = new google.maps.Marker({
            position: miUbicacion,
            map: map,
            title: "Estas aqui!!"
        });
    }
</script>
<div id="map_canvas"></div>

