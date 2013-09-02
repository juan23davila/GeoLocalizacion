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
       enviarToMapa("mapa.php",$array);
       
       curl_close($ch);
       
       function enviarToMapa($destino="",$dato=array()){
	$r = false;
	if($destino!="" ){
		$ch = curl_init($destino);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_POST, 1);
		curl_setopt ($ch, CURLOPT_POSTFIELDS, $dato);
		$data = curl_exec ($ch);
		curl_close ($ch);
			if($data != "0")
				$r = $data;
	}
	return $r;
        }
?>
<br>
<a href="mapa.php">enlace</a>