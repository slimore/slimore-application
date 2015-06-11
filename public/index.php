<?php

define('ROOT',        __DIR__. DIRECTORY_SEPARATOR);
define('APP_PATH',    realpath(__DIR__ . '/../app') . DIRECTORY_SEPARATOR);
define('CONFIG_PATH', realpath(__DIR__ . '/../configs') . DIRECTORY_SEPARATOR);
define('BASE_URL',    str_replace('index.php', '', $_SERVER['PHP_SELF']));

require __DIR__ . '/../vendor/autoload.php';

$configs = require CONFIG_PATH . 'settings.php';

$app = new \Slimore\Mvc\Application($configs);

// $app->dbConnection(); // if using datebase

$app->notFound(function () use ($app) {
	$app->view->setTemplatesDirectory(ROOT);
	$app->render('404.php');
});

require CONFIG_PATH . 'routes.php';

$app->run();