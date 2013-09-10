<!DOCTYPE html>
<!--Esto es una modificacion-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GeoIp</title>
        <link href="./resources/CSS/estilo.css" media="screen" rel="StyleSheet" type="text/css">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <script type="text/javascript"
                src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC6LUtFPZGSxd_7002hqKtSPIBMDyM4W0U&sensor=false">
        </script>
    </head>
    <body onload="initialize()">

        <div id="fondo">

            <div id="global">
                <h2>Pagina para localizar un país de un servidor</h2>

                <div id="t">
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <table border="0" cellpadding="0" cellspacing="0" id="tabla">
                            <tr>
                                <td>
                                    Localizar la siguiente IP:
                                </td>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input name="IPAddress" type="text" maxlength="50">
                                </td>
                                <td>
                                    <input name="Enviar" type="submit" value="Enviar">
                                </td>
                            </tr>
                        </table> 
                    </form>
                </div>

                <div id="mapa">
                    <?
                    $ip = (!empty($_POST["IPAddress"]) ? $_POST["IPAddress"] : "186.81.219.93");
                    //Se crea el objeto curl para hacer peticion de coordenadas
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                    $urlJson = "http://freegeoip.net/json/" . $ip;

                    //Ahora se realiza la respectiva peticion al webservice en formato json
                    curl_setopt($ch, CURLOPT_URL, $urlJson);
                    $respuestaJson = curl_exec($ch);

                    //Este codigo es el que quisiera que sirviera
                    $datos = json_decode($respuestaJson, true);
                    $latitud = $datos['latitude'];
                    $longitud = $datos['longitude'];

                    curl_close($ch);
                    include 'mapa.php';
                    ?>
                </div>

            </div>

    </body>
</html>