<?php
    class Persona{
        private $nome;
        private $cognome;
        private $età;
        private $codice_fiscale;
    
        function __construct($nome, $cognome, $età, $codice_fiscale){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->età = $età;
            $this->codice_fiscale = $codice_fiscale;
        }
    
        function getNome(){
            return $this->nome;
        }
    
        function getCognome(){
            return $this->cognome;
        }
    
        function getEtà(){
            return $this->età;
        }
    
        function getCodiceFiscale(){
            return $this->codice_fiscale;
        }
    
        function toString(){
            return $this->nome . ", " . $this->cognome . ", " . $this->età . ", " . $this->codice_fiscale;
        }
    }
?>