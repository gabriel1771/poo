<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;



    }

    public function __toString(){
        return $this->logradouro ." ," .$this->numero ." ," .$this->cidade;
    }

    public function __destruct(){
        var_dump("DESTRUIR");
    }

}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");
//var_dump($meuEndereco);

echo $meuEndereco;
echo "<br>";
unset($meuEndereco);

?>