<?php

use Tracy\Debugger;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../app/bootstrap.php';

Debugger::enable();

define('WP_USE_THEMES', true);

ob_start();
echo $GLOBALS['NETTE_CONTAINER']->getByType(Nette\Application\Application::class)->run();
$GLOBALS['nette_content'] = ob_get_contents();
ob_end_clean();

require(dirname(__FILE__) . '/wp-blog-header.php');
