<?php

namespace App\Model\Facade;

class CarFacade
{

    public function findAll()
    {
        return ['BMW', 'Tesla', 'Fiat', 'Seat'];
    }

}
