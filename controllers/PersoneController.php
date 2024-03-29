<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include_once "classes/Collettivita.php";
include_once "classes/Persona.php";

class PersoneController{
    function createTrio(){
        return new Collettivita("Trio bastardo", array(new Persona("Matteo", "Falli", 19, "FLLMTT05"), new Persona("Alessio", "Didilescu", 18, "LSSDDL05"), new Persona("Alessandro", "Gonzalez", 19, "LSDGZL04")));
    }
    
    function index(Request $request, Response $response, $args){
        $colletivita = $this->createTrio();
        $response->getBody()->write($colletivita->toString());
        return $response;
    }
    
    function getPersona(Request $request, Response $response, $args){
        $colletivita = $this->createTrio();
        $persona = $colletivita->getPersona($args["codice"]);
        if($persona === null){
            $string = "Persona inesistente";
        }else{
            $string = $persona->toString();
        }
        $response->getBody()->write($string);
        return $response;
    }
}