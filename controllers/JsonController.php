<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include_once "classes/Collettivita.php";
include_once "classes/Persona.php";

class JsonController{
    function createTrio(){
        return new Collettivita("Trio bastardo", array(new Persona("Matteo", "Falli", 19, "FLLMTT05"), new Persona("Alessio", "Didilescu", 18, "LSSDDL05"), new Persona("Alessandro", "Gonzalez", 19, "LSDGZL04")));
    }
    
    function getTrio(Request $request, Response $response, $args){
        $collettività = $this->createTrio();
        $response->getBody()->write("No");
        return $response;
    }
    
    function getPersona(Request $request, Response $response, $args){
        $collettività = $this->createTrio();
        $response->getBody()->write("No");
        return $response;
    }
}