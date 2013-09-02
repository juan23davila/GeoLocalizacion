<!DOCTYPE html>
<!--Esto es una modificacion-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GeoIp</title>
        <link href="estilo.css" media="screen" rel="StyleSheet" type="text/css">
    </head>
    <body>
       
        <div id="fondo">
            
            <div id="global">
                <h2>Pagina para localizar un país de un servidor</h2>
                
                <div id="t">
                <form action="http://www.webservicex.net/geoipservice.asmx/GetGeoIP" method="get" enctype="multipart/form-data">
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
                
                <div id="ProbandoServicio">
                    <?php
                    //Se crea el objeto curl para hacer peticion de coordenadas
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                   
                    $url = "http://freegeoip.net/xml/186.81.219.93";
                        
                    //Ahora se realiza la respectiva peticion al webservice
                    curl_setopt($ch, CURLOPT_URL, $url);
                    $respuesta = curl_exec($ch);
                    echo $respuesta."<br>";
                        
                    //Este codigo es el que quisiera que sirviera
                    $freegeoip = simplexml_load_string($respuesta);
                    foreach ($freegeoip->Resultado as $resultado){
                        $latitud = $resultado->Latitude;
                        $longitud = $resultado->Longitud;
                    }
                    echo $latitud." ".$longitud;
                    
                    //Este es el codigo chambon
                    $array = explode(" ", $respuesta);
                    echo "La latitud es: ".$array[10]."<br>";
                    echo "La longitud es: ".$array[11]; 

                    curl_close($ch);
                    ?>
                </div>              
            </div>

    </body>
</html>