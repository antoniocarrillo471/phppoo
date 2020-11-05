<?php
//un metodo private, solo puede ser accediso en la misma clase donde fue 
//creada,al mismo tiempo no puede mostrarse fuera o en instancias debe 
//manejarse dentro de un metodo de la misma clase
     class clase1{
         private function saludar(){
             return "Hola!";

         }
    public function mandaSaludo(){
       return self::saludar();
    }
     }
     echo clase1::mandaSaludo();

?>