<?php declare(strict_types=1);

namespace App\FrontModule\Presenters;

use Nette\Forms\Form;

final class HomepagePresenter extends FrontPresenter
{

    public function actionDefault()
    {

    }

    protected function createComponentNetteForm()
    {
        $form = new Form();

        $form->addText('name', 'Jméno');

        $form->addSubmit('submit', 'Potvrdit');

        return $form;
    }

}
