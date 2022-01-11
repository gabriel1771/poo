<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo, Iterface1, .... {

    protected function acelerar($v){

        echo " O veiculo acelerou até " .$v ."km/h";

    }

    public function frenar($v){
        echo "O veivulo frenou até " .$v ."km/h";
    }

    public function trocarMarcha($m){
        echo "O veiculo engatou a marcha  " .$m;
    }


}

$carro = new Civic();

$carro->trocarMarcha(1);

?>