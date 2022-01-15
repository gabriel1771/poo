<?php 


interface Veiculo {
    
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    

}


abstract class Automovel implements Veiculo {


    

    public function acelerar($v){

        echo " O veiculo acelerou até " .$v ."km/h";

    }

    public function frenar($v){
        echo "O veivulo frenou até " .$v ."km/h";
    }

    public function trocarMarcha($m){
        echo "O veiculo engatou a marcha  " .$m;
    }


}

?>