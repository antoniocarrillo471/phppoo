<?php
     class retornoDatos{
//tipo string,entero,arreglo y json
     public function retornaString($edad){
         if($edad > 18){
             return "Es legal :v";
               }else{
                   return"No es legal :(";
               }
              }
      public function retornaEntero($valor){
                if($valor > 0){
         return 1;
        }else{
         return 0;
        }
      }
        public function retornaArreglo($ciclos){
          $datos=array();

          for ($i=0; $i < $ciclos; $i++) { 
            $datos[$i]=$i;
           }
            return  $datos;

         } 
         public function retornaJson(){
           $arr=array( 
             "hdd" => 700, 
             "pantalla" => 25,
             "ram"=> 15 
            );           
            
           return json_encode($arr);
        }
  }
  
 


 
$cadena= new retornoDatos();
var_dump($cadena->retornaString(20));
echo "<br>";
var_dump($cadena->retornaEntero(1));
echo "<br>";
var_dump($cadena->retornaArreglo(40));
echo "<br>";
var_dump($cadena->retornaJson ());
?>
