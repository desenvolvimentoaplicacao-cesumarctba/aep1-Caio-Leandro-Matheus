<?php
class cavalo extends animal {


    // aqui vemos o exemplo de visibilidade dos atributos
    private $raca;

    //construtor
    public function __construct($raca) {
        $this ->raca = $raca;
    }

    //método fugir
    public function fugir() {
        echo "BRRUUUUU";
    }

}