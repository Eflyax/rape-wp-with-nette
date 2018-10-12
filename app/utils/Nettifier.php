<?php

function runNette()
{
    ob_start();
    try {
        echo $GLOBALS[Nettifier::CONTAINER]->getByType(Nette\Application\Application::class)->run();
        $GLOBALS[Nettifier::CONTENT] = ob_get_contents();
    } catch (Nette\Application\BadRequestException $e) {
        \Tracy\Debugger::log($e);
    }
    ob_end_clean();
}

/**
 * @param string $content
 */
function replaceNetteMacro($content)
{

    return str_replace(Nettifier::WP_NETTE_MACRO, $GLOBALS[Nettifier::CONTENT], $content);

//    $text = preg_replace_callback('#{control\s*(.*?)}#', function ($m) {
//        $componentName = $m[1];
//        $factory = $componentName . 'Factory';
//        /** @var BaseFormComponent $component */
//        $component = $this->$factory->create();
//        if ($component instanceof BaseFormComponent) {
//            $component->onSave[] = function ($form, $values) use ($componentName) {
//                $listener = $componentName . 'OnSave';
//                $this->$listener($form, $values);
//            };
//        }
//        $this->addComponent($component, $componentName);
//
//        return $component->renderToString();
//    }, $localisedPage->getText());


}

class Nettifier
{

    const CONTAINER = 'nette-container';
    const CONTENT = 'nette-content';
    const WP_NETTE_MACRO = '{nette}';

}

