<?php declare(strict_types=1);

namespace App\FrontModule\Components;

use BaseComponents\Forms\BaseFormComponent;
use BaseComponents\Forms\FormFactory;
use Nette\Application\UI\Form;

interface RegistrationFormFactory
{

    /**
     * @return RegistrationForm
     */
    public function create();

}

class RegistrationForm extends BaseFormComponent
{

    public function __construct(FormFactory $factory)
    {
        parent::__construct($factory);
    }

    public function render()
    {
        $this->template->setFile(__DIR__ . '/registrationForm.latte');
        $this->template->render();
    }

    public function createComponentForm()
    {
        $form = $this->createForm();

        $form->addText('name', 'Email');

        $form->addPassword('password', 'Heslo');

        $form->addSubmit('submit', 'Registrovat se');

        return $form;
    }

    public function processForm(Form $form, $values)
    {
        $this->flashMessage('Odeslaná data: ' . $values->name . ' a ' . $values->password);
        $this->onSave($form, $values);
    }

}
