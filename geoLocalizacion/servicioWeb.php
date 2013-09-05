<?php
      $ip = $_POST["IPAddress"];
                        
       //Se crea el objeto curl para hacer peticion de coordenadas
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_HEADER, 0);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       
       $url = "http://freegeoip.net/xml/".$ip;
       $urlJson = "http://freegeoip.net/json/".$ip;

       //Ahora se realiza la rehttp://freegeoip.net/json/spectiva peticion al webservice
       curl_setopt($ch, CURLOPT_URL, $url);
       $respuesta = curl_exec($ch);
       
       //Ahora se realiza la respectiva peticion al webservice en formato json
       curl_setopt($ch, CURLOPT_URL, $urlJson);
       $respuestaJson = curl_exec($ch);

       //Este codigo es el que quisiera que sirviera
       $datos = json_decode($respuestaJson,true);
       echo "La latitud es: ".$datos['latitude'];
       echo "<br>";
       echo "La longitud es: ".$datos['longitude'];
       echo "<br>";
       $latitud = $datos['latitude'];
       $longitud = $datos['longitude'];
 //      $array = array($datos['latitude'],$datos['longitude']);
 //      enviarToMapa("mapa.php",$array);
       
       curl_close($ch);
       
/*       function enviarToMapa($destino="",$dato=array()){
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
        }*/
?>
<br>

<?php $variable="prueba"; ?>
<a href="mapa.php?lat=<?php echo $latitud; ?>&lon=<?echo $longitud;?>"/>label</a>
