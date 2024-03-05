<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include_once "classes/Collettivita.php";
include_once "classes/Persona.php";

class ApiController{
    function createTrio(){
        return new Collettivita("Trio bastardo", array(new Persona("Matteo", "Falli", 19, "FLLMTT05"), new Persona("Alessio", "Didilescu", 18, "LSSDDL05"), new Persona("Alessandro", "Gonzalez", 19, "LSDGZL04")));
    }

    function getJsonTrio(Request $request, Response $response, $args){
        $colletivita = $this->createTrio();
        $response->getBody()->write(json_encode($colletivita));
        return $response->withHeader("Content-Type","application/json");
    }
    
    function getJsonPersona(Request $request, Response $response, $args){
        $colletivita = $this->createTrio();
        $persona = $colletivita->getPersona($args["codice"]);
        if($persona === null){
            $response->getBody()->write("Persona inesistente");
            return $response;
        }else{
            $response->getBody()->write(json_encode($persona));
            return $response->withHeader("Content-Type","application/json");
        }
    }
}