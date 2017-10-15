<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $request->getAttribute('name');
    
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/name-meaning/', function (Request $request, Response $response) {
    
    return $this->renderer->render($response, 'name-form.phtml');
});

$app->post('/name-meaning/submit', function ($request, $response, $args) {
	$firstName = $request->getParam('formFirstName');
    $lastName = $request->getParam('formLastName');
   	
   	return $this->renderer->render($response, 'name-results.phtml', $args);
});