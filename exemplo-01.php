<?php

class Pessoa {
    
    public $nome; // atributo

    public function falar(){  // método
        return "meu nome é" .$this->nome;
    }


}


$glaucio = new pessoa();
$glaucio -> nome = " Glacio Daniel ";

echo $glaucio -> falar();

?>