<html>
  <head>
    <title>Ejemplo 3</title>
  </head>
  <body>
    <h1>Ejercicio 3:</h1>
    <p>Confeccionar una clase CabeceraPagina que permita mostrar un título, indicarle si queremos que aparezca centrado, a derecha o izquierda, además permitir definir el color de fondo y de la fuente.</p>

<?php
  class CabeceraPagina {
    private $titulo;
    private $alineacion;
    private $colorfondo;
    private $fuente;

    public function inicializar($titulo, $alineacion, $colorfondo, $fuente){
      $this->titulo = $titulo;
      $this->alineacion = $alineacion;
      $this->colorfondo = $colorfondo;
      $this->fuente = $fuente;
    }

    public function printTitulo(){
      echo '<h1 style="text-align: '.$this->alineacion.';';
      echo 'background-color: '.$this->colorfondo.';';
      echo 'font-family: '.$this->fuente.';">';
      echo $this->titulo;
      echo '</h1>';
    }
  }

  $titulo1 = new CabeceraPagina();
  $titulo1->inicializar('Hola a todos','center','#333333','sanz-serif');
  $titulo1->printTitulo();
  $titulo2 = new CabeceraPagina();
  $titulo2->inicializar('Adios, amigos','right','#220066','serif');
  $titulo2->printTitulo();
?>

  </body>
</html>
