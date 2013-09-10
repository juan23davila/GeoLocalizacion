<?php

include './lib/Controller.php';
class MapsController extends Controller{
    
    private $nombre;
    
    public function __construct($nombre) {
        $this->nombre=$nombre;
    }
    
    public function vista(){
        $this->asignar(array('vistamapa'=>'./modulos/gMaps/views/index.php'));
        $this->cargarVista("mapa");
    }
}

?>
