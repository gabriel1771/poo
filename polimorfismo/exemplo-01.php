<?php

abstract class Animal {

    public function falar(){
        return "som";
    }

    public function mover(){
        return "anda";
    }


}

class cachorro extends Animal {

    public function falar(){
        return "late";
    }





}

class Gato extends Animal {

    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal {
    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e " .parent::mover();
    }
}


$pluto = new Cachorro();

echo $pluto->falar() ."<br>";
echo $pluto->mover() ."<br>";

echo "-----------------------------------" ."<br>";

$garfield = new Gato();

echo $garfield->falar() ."<br>";
echo $garfield->mover() ."<br>";

echo "----------------------------------" ."<br>";

$ave = new Passaro();

echo $ave->falar() ."<br>";
echo $ave->mover() ."<br>";




?>