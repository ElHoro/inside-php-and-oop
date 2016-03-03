<?php

include 'Cuadro.php';

 $cuadroRojoCinco = new cuadro(5, 'rojo');
   
 $cuadroVerdeCinco = new cuadro(10, 'verde');
  
 $cuadroVerdeCinco->SettamanoLado(5);
 
 $cuadroVerdeCinco->GettamanoLado();
  
 $cuadroAzul = new cuadro($cuadroVerdeCinco->GettamanoLado(), 'azul');
 
 $cuadroAzul->PrintLado();