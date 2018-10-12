<?php declare(strict_types=1);

namespace BaseComponents\Forms;

use Nette\Application\UI as UI;
use Nette\Application\UI\Form;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Utils\ArrayHash;

/**
 * @property callable[] $onSave
 * @method onSave(Form $form, ArrayHash $values)
 * @method onValidate(Form $form, ArrayHash $values)
 * @property-read Template $template
 */
abstract class BaseFormComponent extends UI\Control
{

    public $onSave = [];

    public $onValidate = [];

    /** @var FormFactory */
    protected $factory;

    public function __construct(FormFactory $factory)
    {
        parent::__construct();
        $this->factory = $factory;
    }

    /**
     * @return Form
     */
    public abstract function createComponentForm();

    protected function createForm()
    {
        $form = $this->factory->create();

        $form->onValidate[] = [$this, 'validateForm'];

        $form->onSuccess[] = [$this, 'processForm'];

        return $form;
    }

    abstract function processForm(Form $form, $values);

    public function validateForm(Form $form, $values)
    {
        $this->onValidate($form, $values);
    }

    /** @return Form */
    protected function form()
    {
        return $this['form'];
    }

}
