<html>
  <head>
    <title>Ejemplo 4</title>
  </head>
  <body>
    <h1>Ejercicio 4:</h1>
    <p>Confeccionar una clase Tabla que permita indicarle en el constructor la cantidad de filas y columnas. Definir otra responsabilidad que podamos cargar un dato en una determinada fila y columna además de definir su color de fuente y fondo. Finalmente debe mostrar los datos en una tabla HTML.</p>

<?php
  class Tabla {
    private $fila;
    private $columna;
    private $content = array();
    private $color = array();
    private $fuente = array();

  public function __construct($fila, $columna){
    $this->fila = $fila;
    $this->columna = $columna;
  }

  public function addContent($fila, $columna, $content, $color, $fuente){
    $this->content[$fila][$columna] = $content;
    $this->color[$fila][$columna] = $color;
    $this->fuente[$fila][$columna] = $fuente;
  }

  public function startTabla(){
    echo '<table>';
  }

  public function endTabla(){
    echo '</table>';
  }

  public function printTabla(){
    $this->startTabla();
    for($f=1; $f<=$this->fila; $f++){
      echo '<tr>';
      for($c=1; $c<=$this->columna; $c++){
        echo '<td>';
        echo '<p style="color: '.$this->fuente[$f][$c].'; background-color: '.$this->color[$f][$c].'">';
        echo $this->content[$f][$c];
        echo '</p>';
        echo '</td>';
      }
      echo '</tr>';
    }
    $this->endTabla();
  }
}

$tabla1 = new Tabla(3, 2);
$tabla1->addContent(1, 1, 1, '#000000', '#FFFFFF');
$tabla1->addContent(1, 2, 2, '#000000', '#FFFFFF');
$tabla1->addContent(2, 1, 3, '#333333', '#CCCCCC');
$tabla1->addContent(2, 2, 4, '#333333', '#CCCCCC');
$tabla1->addContent(3, 1, 5, '#666666', '#999999');
$tabla1->addContent(3, 2, 6, '#666666', '#999999');
$tabla1->printTabla();
?>

  </body>
</html>
