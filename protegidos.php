<?php
//los metodos protegidos solo pueden ser accedidos dede herencia de clases
//o desde clases hijas y debe ser utilizado en metodo hijo 
     class clasePadre{
         protected function metodo1(){
             return "Metodo protegido";
         }
         }
     class claseHija extends clasePadre{
        public function muestra(){
            return parent::metodo1();
    }
     }
     $obj= new claseHija();
     echo $obj-> muestra();

?>