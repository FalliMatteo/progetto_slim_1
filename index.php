<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include "Collettività.php";
include "Persona.php";

$app = AppFactory::create();

$app->get('/persone', function (Request $request, Response $response, $args) {
    $collettività = new Collettività("Trio bastardo", array(new Persona("Matteo", "Falli", 19, "FLLMTT05"), new Persona("Alessio", "Didilescu", 18, "LSSDDL05"), new Persona("Alessandro", "Gonzalez", 19, "LSDGZL04")));
    $response->getBody()->write($collettività->toString());
    return $response;
});

$app->run();
