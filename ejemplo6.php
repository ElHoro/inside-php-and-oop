<html>
  <head>
    <title>Ejemplo 6</title>
  </head>
  <body>
    <h1>Ejercicio 6: Herencia</h1>
    <p>
      Confeccionar una clase Persona que tenga como atributos el nombre y la edad. Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.

      Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo.

      Definir un objeto de la clase Persona y llamar a sus métodos. También crear un objeto de la clase Empleado y llamar a sus métodos.
    </p>
<?php
  class Persona {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad){
      $this->nombre = $nombre;
      $this->edad = $edad;
    }

    public function printPersona(){
      echo 'El nombre de la persona es: '.$this->nombre.' y tiene '.$this->edad.' años de edad.';
      echo '<br>';
    }
  }

  class Empleado extends Persona {
    private $sueldo;

    public function addSueldo($sueldo){
      $this->sueldo = $sueldo;
    }

    public function printSueldo(){
      echo 'El sueldo de '.$this->nombre.' es de '.$this->sueldo;
    }
  }

$PersonaJuan = new Persona('Juan',30);
$PersonaJuan->printPersona();
$EmpleadoJorge = new Empleado('Jorge',23);
$EmpleadoJorge->printPersona();
$EmpleadoJorge->addSueldo(3500);
$EmpleadoJorge->printSueldo();

?>

  </body>
</html>
