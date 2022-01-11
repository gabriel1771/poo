<?php

class Documento {

    private $numero;

    protected function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }

}

class CPF extends Documento {

    public function validar():bool {

       $numeroCPF = $this->getNumero();

        return true;



    }

    public  function algarismos():int {
        $algarismos = $this->getNumero();
        return $algarismos;
    }

}

$doc = new CPF();

$doc->setNumero(12332123244);
var_dump($doc->validar());

echo '<br>';


echo $doc->algarismos();




?>