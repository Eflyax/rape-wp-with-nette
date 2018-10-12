<?php

use Tracy\Debugger;

require __DIR__ . '/../vendor/autoload.php';

Debugger::$showLocation = true;

$configurator = new Nette\Configurator;

$configurator->setDebugMode([]);

if (PHP_SAPI === 'cli') {
    $configurator->setDebugMode(true);
}

$configurator->enableDebugger(__DIR__ . '/../logs');

$configurator->setTempDirectory(__DIR__ . '/../tmp');

$configurator->createRobotLoader()
    ->addDirectory(__DIR__ . '/../app')
    ->register();

$configurator->addConfig(__DIR__ . '/../app/config/config.neon');
$configurator->addConfig(__DIR__ . '/../app/config/config.local.neon');

$GLOBALS[NeWp::CONTAINER] = $configurator->createContainer();
