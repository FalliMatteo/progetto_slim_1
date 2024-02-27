<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include "classes/Collettività.php";
include "classes/Persona.php";

$app = AppFactory::create();

function createTrio(){
    return new Collettività("Trio bastardo", array(new Persona("Matteo", "Falli", 19, "FLLMTT05"), new Persona("Alessio", "Didilescu", 18, "LSSDDL05"), new Persona("Alessandro", "Gonzalez", 19, "LSDGZL04")));
}

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Scrivi nell'url /persone per visualizzare la lista di persone disponibili, /persone/CODICE_FISCALE per visualizzare le informazioni di una persona");
    return $response;
});

$app->get('/persone', function (Request $request, Response $response, $args) {
    $collettività = createTrio();
    $response->getBody()->write($collettività->toString());
    return $response;
});

$app->get('/persone/{codice}', function (Request $request, Response $response, $args) {
    $collettività = createTrio();
    $response->getBody()->write($collettività->getPersona($args["codice"]));
    return $response;
});

$app->run();
