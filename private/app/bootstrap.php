<?php

// Uncomment line with umask command is a potential security hole!
// PLEASE DO NOT USE UNLESS YOU KNOW WHAT YOU ARE DOING
// https://github.com/nette/nette/issues/1039
// umask(0);

use Nette\Application\Routers\Route,
	Nette\Application\Routers\RouteList,
	Nette\Application\Routers\SimpleRouter;


// Load Nette Framework
if (@!include __DIR__ . '/../vendor/autoload.php') {
	die('Install Nette using `composer update`');
}

// Configure application
$configurator = new Nette\Configurator;

// Enable Nette Debugger for error visualisation & logging
//$configurator->setDebugMode('23.75.345.200'); // enable for your remote IP
$configurator->enableDebugger(__DIR__ . '/../log');

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->register();

// Create Dependency Injection container from *config*.neon files
$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
