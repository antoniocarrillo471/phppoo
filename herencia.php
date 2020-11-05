<?php
  //la herencia es una manera de obtener las propiedades de una clase a otra 
  //mediante la palabra "extends"

  class clasePadre{
         public function metodoPadre(){
             return "Aguila calva llamando a puntitas";
         }
         public function metodo1(){
             return "Es aguila calva";

         }
     }

     class claseHijo extends clasePadre{
         public function metodohijo(){
             return self::metodo1();
         }
         public function metodo1(){
            return "Puntitas ";
 
    }
}
     //$obj= new claseHijo();
     //echo $obj->metodoPadre();
    //intancia rapida o tambien conocid como doble puntuacion
     // echo claseHijo::metodoPadre();
      echo claseHijo::metodohijo();


?>