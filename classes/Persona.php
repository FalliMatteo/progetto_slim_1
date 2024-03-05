<?php
    class Persona implements jsonSerializable{
        private $nome;
        private $cognome;
        private $eta;
        private $codice_fiscale;
    
        function __construct($nome, $cognome, $eta, $codice_fiscale){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
            $this->codice_fiscale = $codice_fiscale;
        }
    
        function getNome(){
            return $this->nome;
        }
    
        function getCognome(){
            return $this->cognome;
        }
    
        function getEta(){
            return $this->eta;
        }
    
        function getCodiceFiscale(){
            return $this->codice_fiscale;
        }
    
        function toString(){
            return $this->nome . ", " . $this->cognome . ", " . $this->eta . ", " . $this->codice_fiscale;
        }

        function jsonSerialize(){
            return [
                "nome"=>$this->nome,
                "cognome"=>$this->cognome,
                "eta"=>$this->eta,
                "codice_fiscale"=>$this->codice_fiscale
            ];
        }
    }
?>