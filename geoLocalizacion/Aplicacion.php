<?php
class  Aplication{
     private static $instancia;
    function Aplicacion($version = "") {
        $this->version = $version;
    }
    
   public static function getInstance()
   {
      if (  !self::$instancia instanceof self)
      {
         self::$instancia = new self;
      }
      return self::$instancia;
   }
    
    //Este metodo carga los controladores segun el nombre
    // Busca los controladores en los paquetes
    function cargarControlador($modulo,$controlador) {
        $controlador = $controlador;
        
        $urlFile = 'modulos/'.$modulo.'/controllers/' . $controlador . 'Controller.php';
      
        if (file_exists($urlFile)) {
            include $urlFile;
            $class = $controlador.'Controller';
            $controller = new $class($modulo);
            return $controller;
        } else {
            return null;
        }
    }
    
     
   
    //Si ocurre algun error devuelve el error con el tipo
    function error($mensaje = "Ocurrio un error inesperado!", $titulo = "Error del sistema") {
        
    }
    
}
