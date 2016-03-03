<html>
  <head>
    <title>Ejemplo 1</title>
  </head>
  <body>
    <h1>Ejercicio 1:</h1>
    <p>Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
Definir un método inicializar que lleguen como dato el nombre y sueldo. Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos)</p>

<?php
class empleado {
   private $nombre;
   private $sueldo;

   public function inicializar($nombre, $sueldo){
       $this->nombre = $nombre;
       $this->sueldo = $sueldo;
   }

   public function impuesto(){
      echo $this->nombre;
      echo ' ';
      if ($this->sueldo > 300) {
         echo 'debe pagar impuestos';
      }else{
         echo 'no debe pagar impuestos';
      }
      echo '<br>';
   }

}

$empleado1 = new empleado();
$empleado1->inicializar('Jorge', '500');
$empleado1->impuesto();
$empleado2 = new empleado();
$empleado2->inicializar('Luis', '250');
$empleado2->impuesto();
?>

  </body>
</html>
