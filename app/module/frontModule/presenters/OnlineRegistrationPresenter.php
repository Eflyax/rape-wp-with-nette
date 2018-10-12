<?php declare(strict_types=1);

namespace App\FrontModule\Presenters;

use App\FrontModule\Components\RegistrationFormFactory;
use Nette\Application\UI\Form;

final class OnlineRegistrationPresenter extends FrontPresenter
{

    /** @var RegistrationFormFactory @inject */
    public $registrationFormFactory;

    protected function createComponentRegistrationForm()
    {
        $form = $this->registrationFormFactory->create();

        $form->onSave[] = function (Form $form, $values) {
            $this->redirect('OnlineRegistration:');
        };

        return $form;
    }

}
