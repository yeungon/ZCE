<?php

interface CursosInterface {
    public function setPreco($valor);
}

abstract class Cursos implements CursosInterface {
    public function setPreco($valor) {
        $foo = 'bar';
    }
}

class Curso1 extends Cursos {
    protected $preco;
    public function setPreco($valor){
        $this->preco = $valor;
    }
    
    public function getPreco() {
        return $this->preco;
    }

    public function __construct() {
        $this->setPreco('200.00');
    }
}

$curso1 = new Curso1();
echo $curso1->getPreco();  

// Output:
// 200.00

