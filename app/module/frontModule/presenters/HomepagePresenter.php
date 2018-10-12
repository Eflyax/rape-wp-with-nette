<?php declare(strict_types=1);

namespace App\FrontModule\Presenters;

use App\Model\Facade\CarFacade;

final class HomepagePresenter extends FrontPresenter
{

    /** @var CarFacade @inject */
    public $carFacade;

    public function actionDefault($s = null)
    {
        if ($s) {
            $this->actionSearch($s);
            $this->setView('search');
        }
    }

    private function actionSearch($s)
    {
        $this->template->term = $s;
        $this->template->results = $this->carFacade->findAll();
    }

}
