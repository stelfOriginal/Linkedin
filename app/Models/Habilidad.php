<?php


// header 

//POO
// clase habilidades que es el molde de los futuros objetos
class Habilidad {
    // propiedades de la clase
    
    public $habilidad00 = 'No Incluido';
    public $habilidad01 = 'No Incluido';
    public $habilidad02 = 'No Incluido';
 



    // constructor de la clase habilidades
    public function __construct($habilidad00, $habilidad01,$habilidad02){
        // asignando datos a la propiedad nombre a traves del constructor    
$this->habilidad00 = $habilidad00;
$this->habilidad01 = $habilidad01;
$this->habilidad02 = $habilidad02;


    }

public function bucle(){
foreach($this as $key => $valor){

        if($valor != ""){
        echo('<li class="parrafo">');
        echo($valor . '<br>');
        echo('</li>');
    }

    }
}
}
