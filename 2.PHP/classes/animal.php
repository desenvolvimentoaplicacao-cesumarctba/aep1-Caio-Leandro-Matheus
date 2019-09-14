<?php

abstract class animal {


    // aqui vemos o exemplo de visibilidade dos atributos
    private $tamanho;
    private $cor;

    //construtor
    public function __construct($tamanho, $cor) {
        $this ->tamanho = $tamanho;
        $this ->cor     = $cor;
    }

    //método comer
    public function comer() {
        echo "COMIDA";
    }

}