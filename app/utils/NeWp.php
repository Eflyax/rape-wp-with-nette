<?php

function insertNetteContent()
{
    echo $GLOBALS[NeWp::CONTENT];
}

function runNette()
{
    ob_start();
    echo $GLOBALS[NeWp::CONTAINER]->getByType(Nette\Application\Application::class)->run();
    $GLOBALS[NeWp::CONTENT] = ob_get_contents();
    ob_end_clean();
}

class NeWp
{

    const CONTAINER = 'nette-container';
    const CONTENT = 'nette-content';

}

