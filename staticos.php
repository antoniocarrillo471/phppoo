<?php

     class miclase{
        public function hola(){
            return "hola!";
        
         }
         public static function metodo(){
            return self::hola();
   
    }
     }
     echo miclase::metodo();

?>