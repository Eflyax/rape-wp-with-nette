<?php declare(strict_types=1);

namespace BaseComponents\Forms;


use Nette\Application\UI\Form;

class FormFactory
{

    /**
     * @return Form
     */
    public function create()
    {
        $form = new Form();

        return $form;
    }

}
