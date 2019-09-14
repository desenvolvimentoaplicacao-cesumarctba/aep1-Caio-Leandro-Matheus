<?php
class leao extends animal {


    // aqui vemos o exemplo de visibilidade dos atributos
    private $juba;

    //construtor
    public function __construct($juba) {
        $this ->juba = $juba;
    }

    //método cacar
    public function cacar() {
        echo "AAAAAAAAH";
    }

}