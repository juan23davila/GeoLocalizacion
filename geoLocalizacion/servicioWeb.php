<?php
      $ip = (!empty($_POST["IPAddress"])?$_POST["IPAddress"]:"186.81.219.93");
                        
       //Se crea el objeto curl para hacer peticion de coordenadas
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_HEADER, 0);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       
       $urlJson = "http://freegeoip.net/json/".$ip;
       
       //Ahora se realiza la respectiva peticion al webservice en formato json
       curl_setopt($ch, CURLOPT_URL, $urlJson);
       $respuestaJson = curl_exec($ch);

       //Este codigo es el que quisiera que sirviera
       $datos = json_decode($respuestaJson,true);
       $latitud = $datos['latitude'];
       $longitud = $datos['longitude'];
       
       curl_close($ch);
       
?>
<br>

<?php $variable="prueba"; ?>
<a href="mapa.php?lat=<?php echo $latitud; ?>&lon=<?echo $longitud;?>"/>label</a>
