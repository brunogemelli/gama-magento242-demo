<?php

namespace GamaAcademy\Di2\Helper;

use GamaAcademy\Di1\Helper\MyClassInterface;

class OtherClass implements MyClassInterface
{
    public function getItems()
    {
        return [
            'item100'
        ];
    }
}
