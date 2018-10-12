<?php

use Tracy\Debugger;


require __DIR__ . '/../app/bootstrap.php';

Debugger::enable();

define('WP_USE_THEMES', true);

ob_start();
echo $GLOBALS['NETTE_CONTAINER']->getByType(Nette\Application\Application::class)->run();
$GLOBALS['nette_content'] = ob_get_contents();
ob_end_clean();

require(dirname(__FILE__) . '/wp-blog-header.php');
