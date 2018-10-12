<?php

require __DIR__ . '/app/bootstrap.php';

define('WP_USE_THEMES', true);

runNette();

require(dirname(__FILE__) . '/wp-blog-header.php');
