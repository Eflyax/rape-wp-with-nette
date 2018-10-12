<?php

function insertNetteContent()
{
    echo $GLOBALS[NeWp::CONTENT];
}

function runNette()
{
    ob_start();
    try {
        echo $GLOBALS[NeWp::CONTAINER]->getByType(Nette\Application\Application::class)->run();
        $GLOBALS[NeWp::CONTENT] = ob_get_contents();
    } catch (Nette\Application\BadRequestException $e) {
        \Tracy\Debugger::log($e);
    }
    ob_end_clean();
}


//public static function

class NeWp
{

    const CONTAINER = 'nette-container';
    const CONTENT = 'nette-content';

}

