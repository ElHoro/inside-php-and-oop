<html>
  <head>
    <title>Ejemplo 2</title>
  </head>
  <body>
    <h1>Ejercicio 2:</h1>
    <p>Confeccionar una clase Menu. Permitir añadir la cantidad de opciones que necesitemos. Mostrar el menú en forma horizontal o vertical (según que método llamemos.</p>

<?php
  class menu {
    private $titulo = array();
    private $link = array();

    public function addOpcion($titulo, $link){
      $this->titulo[] = $titulo;
      $this->link[] = $link;
    }

    public function showMenu(){
      for($f=0; $f < count($this->titulo); $f++){
        echo '<a href="'.$this->link[$f].'">';
        echo $this->titulo[$f];
        echo '</a><br>';
      }
    }
  }

  $menu1 = new menu();
  $menu1->addOpcion('google', 'www.google.com');
  $menu1->addOpcion('yahoo', 'www.yahoo.com');
  $menu1->addOpcion('bing', 'www.bing.com');
  $menu1->showMenu();

?>

  </body>
</html>
