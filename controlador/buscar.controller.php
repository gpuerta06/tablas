<?php 
//Requerimos el modelo que trabajara para este controlador
require_once 'modelo/buscar.php';

class BuscarController{

 private $BuscarModelo;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->BuscarModelo = new buscar();
    }

    //Llamado BuscarAJAX
    public function BuscarAJAX(){
    /*Realizamos un condicional, en donde evaluara si hay alguna acción por parte del formulario y si no cumple
        me muestre solo la tabla completa */ 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // En esta referencia hacemos la busqueda para el AJAX
            if($consulta = $this->BuscarModelo->ObtenerJugadorAJAX($_POST['buscar'])){
               
                $datos = [
                            'consulta' => $consulta
                         ];
                require_once 'vista/inc/header.php';
                require_once 'vista/tabla.php';
                require_once 'vista/inc/footer.php';
            }else{
                require_once 'vista/inc/header.php';
                require_once 'vista/error.php';
                require_once 'vista/inc/footer.php';
                    
                }
        }else{
            // En esta referencia hacemos la busqueda para todos los datos de la tabla
                $consultas = $this->BuscarModelo->ObtenerJugador();
                
                $datos = [
                            'consultas' => $consultas
                    
                        ]; 
                require_once 'vista/inc/header.php';
                require_once 'vista/buscar.php';
                require_once 'vista/inc/footer.php';
            }
    }
    
    
}

 ?>