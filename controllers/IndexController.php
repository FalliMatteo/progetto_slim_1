<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class IndexController{
    function index(Request $request, Response $response, $args){
        $response->getBody()->write(
            "Scrivi nell'url...<br>
            <b>/persone</b> per visualizzare la lista di persone disponibili<br>
            <b>/persone/<i>codice_fiscale</i></b> per visualizzare le informazioni di una persona<br>
            <b>/api/persone</b> per visualizzare la lista di persone disponibili in formato json<br>
            <b>/api/persone/<i>codice_fiscale</i></b> per visualizzare le informazioni di una persona in formato json"
        );
        return $response;
    }
}