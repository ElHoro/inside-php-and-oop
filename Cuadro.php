<?php

class cuadro {
	
	private $tamanoLado;
	private $color;
	private $cambios = 0;

	public function __construct($tamanoLado, $color){
		
		$this->tamanoLado = $tamanoLado;
		$this->color = $color;
				
	}
	
	public function PrintLado(){
		
		echo '<br>el tamaño del cuadro '. $this->color .' es '. $this->tamanoLado;
		
	}
	
	public function CountCambios(){
		
		$this->cambios++;
		
		echo '<br>Cambios hechos: '. $this->cambios;
		
	}
	
	public function SettamanoLado($tamanoLado){
		
		$this->tamanoLado = $tamanoLado;
				
	}
	
	public function GettamanoLado(){
		
		return $this->tamanoLado;
		
	}
		
}