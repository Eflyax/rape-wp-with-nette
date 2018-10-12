<?php declare(strict_types=1);

namespace App\FrontModule\Presenters;

use Nette\Application\UI\Presenter;

abstract class FrontPresenter extends Presenter
{

    const LAYOUT_FRONT_TEMPLATE = __DIR__ . '/../templates/@layoutFront.latte';

    public function startup()
    {
        parent::startup();
        $this->setLayout(self::LAYOUT_FRONT_TEMPLATE);
    }

    public function redirectNeWp($destination, $arg = [])
    {
        if (isset($this->params['_fid'])) {
            $arg['_fid'] = $this->params['_fid'];
        }

        header('Location: ' . $this->link($destination, $arg));
        die();
    }

}
