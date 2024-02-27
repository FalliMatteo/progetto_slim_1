<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class IndexController{
    function index(Request $request, Response $response, $args){
        $response->getBody()->write("Scrivi nell'url /persone per visualizzare la lista di persone disponibili \n/persone/CODICE_FISCALE per visualizzare le informazioni di una persona \n/json/persone per visualizzare la lista di persone disponibili in formato json \n/json/persone/CODICE_FISCALE per visualizzare le informazioni di una persona in formato json");
        return $response;
    }
}