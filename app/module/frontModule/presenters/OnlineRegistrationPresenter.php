<?php declare(strict_types=1);

namespace App\FrontModule\Presenters;

use Nette\Forms\Form;

final class OnlineRegistrationPresenter extends FrontPresenter
{

    public function actionDefault()
    {
    }


    protected function createComponentNetteForm()
    {
        $form = new Form();

        $form->addText('name', 'Jméno')
            ->setRequired('Zadje jméno!');

        $form->addSubmit('submit', 'Potvrdit');

        return $form;
    }


}
