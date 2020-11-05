<?php
     class Metodos{
        public function mandarColor($valor){

         if ($valor==1) {
             return "rojo";
            
            }else if ($valor==2) {
                return "morado";
            
        }else if ($valor==3) {
            return "morado";
        }

    }



     

    public function darDeAltaColor($tipocolor){
       // $obj= new Metodos();
       // return $obj-> mandarColor($tipocolor);
       return self::mandarColor($tipocolor);


     }
}

$obj= new Metodos();
echo $obj->darDeAltaColor(3);

?>