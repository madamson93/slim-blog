<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $request->getAttribute('name');
    
	// Render template
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/name-meaning', function (Request $request, Response $response) {
    
	// Render template
    return $this->renderer->render($response, 'name-form.phtml');
});