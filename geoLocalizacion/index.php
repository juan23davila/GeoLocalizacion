<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author Ing. Sistemas
 */
include './Aplicacion.php';
class indexController {
    
    static function run(){
        $modulo = (!empty($_REQUEST['modulo']) ? $_REQUEST['modulo'] : "gMaps");
        $controller = (!empty($_REQUEST['controlador'])? $_REQUEST['controlador'] : "Maps");
        $metodo = (!empty($_REQUEST['metod'])? $_REQUEST['metod'] : "vista");
        
        $aplicacion = new Aplication();
        $instanciaController = $aplicacion->cargarControlador($modulo, $controller);
        if ($instanciaController==NULL){
            echo "error";
        }
        else
        $instanciaController->$metodo();
    }
}

indexController::run();
?>
