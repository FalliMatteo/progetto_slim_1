<?php
    class Collettivita{
        private $nome;
        private $persone;

        function __construct($nome, $persone){
            $this->nome = $nome;
            $this->persone = $persone;
        }

        function getNome(){
            return $this->nome;
        }

        function getPersona($codice){
            foreach($this->persone as $persona){
                if($persona->getCodiceFiscale() === $codice){
                    return $persona;
                }
            }
            return null;
        }

        function addPersona($persona){
            array_push($this->persone, $persona);
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