<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once "controllers/IndexController.php";
include_once "controllers/PersoneController.php";
include_once "controllers/ApiController.php";

$app = AppFactory::create();

$app->get('/', "IndexController:index");
$app->get('/persone', "PersoneController:index");
$app->get('/persone/{codice}', "PersoneController:getPersona");
$app->get("/api/persone", "ApiController:getJsonTrio");
$app->get("/api/persone/{codice}", "ApiController:getJsonPersona");

$app->run();
