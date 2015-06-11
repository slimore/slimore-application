<?php

$app->get("/", function() {
	echo "Hello world!";
});

$app->map('/foo/bar', function() {
    echo "I respond to multiple HTTP methods!";
})->via('GET', 'POST');

$app->get('/news', 'NewsController:index');
$app->get('/news/test', 'NewsController:test');
$app->get('/news/:name', 'NewsController:index');
//$app->get('/test', controller('news', 'test'));
//$app->get('/test', ctl('news', 'test')); // or

// cotnroller group
$app->controller('news', function($controller, $app) { 
	$app->get('/news', $controller . ':read');
	$app->get('/news/:id', $controller . ':readOne');
	$app->post('/news', $controller . ':create');
	$app->put('/news/:id', $controller . ':update');
	$app->delete('/news/:id', $controller . ':delete');
});

// Auto route
$app->autoRoute();