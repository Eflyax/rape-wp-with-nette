<?php

use Tracy\Debugger;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../app/bootstrap.php';

Debugger::enable();

define('WP_USE_THEMES', true);

require(dirname(__FILE__) . '/wp-blog-header.php');
