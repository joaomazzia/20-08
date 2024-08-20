<?php

class Funcionario {
    //atributos
    public $nome='clerosvaldo';
    public $telefone='43 999-9999';
    public $numFilhos=0;

    //funções e métodos
    function resumirCardFunc () {
        return "$this->nome e ele possui $this->numFilhos";
    }


    function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }
}

$y= new Funcionario();

 $y->modificarNumFilhos(3) . '<br />';

echo $y->resumirCardFunc();

?>