<html>
  <head>
    <title>Ejemplo 5</title>
  </head>
  <body>
    <h1>Ejercicio 5: Colaboración de objetos</h1>
    <p>Confeccionar la clase Tabla vista en conceptos anteriores. Plantear una clase Celda que colabore con la clase Tabla. La clase Tabla debe definir una matriz de objetos de la clase Celda.

La clase Celda debe definir los atributos: $texto, $colorFuente y $colorFondo.

</p>

<?php

  class Celda {
    private $texto;
    private $colorFuente;
    private $colorFondo;

    public function __construct($texto, $colorFuente, $colorFondo){
      $this->texto = $texto;
      $this->colorFuente = $colorFuente;
      $this->colorFondo = $colorFondo;
    }

    public function printCelda(){
      echo '<td>';
      echo '<p style="color: '.$this->colorFuente.'; background-color: '.$this->colorFondo.'">';
      echo $this->texto;
      echo '</p>';
      echo '</td>';
    }
  }

  class Tabla {
    private $fila;
    private $columna;
    private $content = array();

  public function __construct($fila, $columna){
    $this->fila = $fila;
    $this->columna = $columna;
  }

  public function addContent($fila, $columna, $texto, $colorFuente, $colorFondo){
    $this->content[$fila][$columna] = new Celda($texto, $colorFuente, $colorFondo);
  }

  public function startTabla(){
    echo '<table>';
  }

  public function endTabla(){
    echo '</table>';
  }

  public function startFila(){
    echo '<tr>';
  }

  public function endFila(){
    echo '</tr>';
  }

  public function showCelda($f, $c){
    $this->content[$f][$c]->printCelda();
  }

  public function printTabla(){
    $this->startTabla();
    for($f=1; $f<=$this->fila; $f++){
      $this->startFila();
      for($c=1; $c<=$this->columna; $c++){
        $this->showCelda($f,$c);
      }
      $this->endFila();
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
