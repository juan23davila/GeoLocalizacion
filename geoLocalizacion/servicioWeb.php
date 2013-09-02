<?php
      $ip = $_POST["IPAddress"];
                        
       //Se crea el objeto curl para hacer peticion de coordenadas
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_HEADER, 0);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       
       $url = "http://freegeoip.net/xml/".$ip;

       //Ahora se realiza la respectiva peticion al webservice
       curl_setopt($ch, CURLOPT_URL, $url);
       $respuesta = curl_exec($ch);

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
