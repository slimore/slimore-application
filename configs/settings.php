<?php

//$logWriter = new \Slimore\Log\Writer();
//$logWriter->setPath(APP_PATH . 'logs');

return [
	'mode'          => 'development',
    'debug'         => true,
    //'log.enabled'   => true,
    //'log.level'     => \Slim\Log::DEBUG,
    //'log.writer'    => $logWriter,
	'path'          => APP_PATH,
	'baseURL'       => BASE_URL,
	'autoloads'     => [
		realpath(__DIR__ . '/../lib')
	],
	'db' => [
	    'driver'    => 'mysql',
	    'host'      => 'localhost',
	    'database'  => 'test',
	    'username'  => 'root',
	    'password'  => 'password',
	    'charset'   => 'utf8',
	    'collation' => 'utf8_general_ci',
	    'prefix'    => ''
	]
];