<?php
     class miClase{
//define los atributos
     public $resultado=0;


//define los metodos 
public function miMetodo($v1,$v2){
   

    $this-> resultado=$v1 + $v2;

    return $this-> resultado;
}
     }
     //fin
     //instanciar o declarar un objeto 
$miObjeto= new miClase();
echo $miObjeto-> miMetodo(500,5897);

?>