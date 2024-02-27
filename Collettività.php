<?php
    class Collettività{
        private $nome;
        private $persone;

        function __construct($nome, $persone){
            $this->nome = $nome;
            $this->persone = $persone;
        }

        function getNome(){
            return $this->nome;
        }

        function toString(){
            $string = $this->nome . " : ";
            foreach($this->persone as $persona){
                $string .= $persona->toString() . "; ";
            }
            return $string;
        }
    }
?>