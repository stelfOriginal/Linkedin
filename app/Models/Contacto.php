<?php


// header 

//POO
// clase contacto que es el molde de los futuros objetos
class Contacto{
    // propiedades de la clase
    public $nombre;
    public $apellido;
    public $logo;
    public $subtitulo = 'Descripcion';
    public $mail = 'No inclido';
    public $movil;
    public $linkedin = 'https://linkedin.es';
    public $twiter = 'https://twiter.es';
    public $resumen = 'no incluido';



    // constructor de la clase Contacto
    public function __construct($nombre, $apellido,$mail,$movil){
        // asignando datos a la propiedad nombre a traves del constructor
$this->nombre = $nombre;
$this->apellido = $apellido;
$this->mail = $mail;
$this->movil = $movil;
    }


    // compotamientos de la clase contacto

    public function logo(){
        $letra01 = substr($this->nombre,0,1);
        $letra02= substr ($this->apellido,0,1);

        return strtoupper($letra01 . $letra02);
    }
}







?>