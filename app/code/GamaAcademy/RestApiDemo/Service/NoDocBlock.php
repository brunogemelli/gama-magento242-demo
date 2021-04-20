<?php

namespace GamaAcademy\RestApiDemo\Service;

use GamaAcademy\RestApiDemo\Api\NoDocBlockInterface;

class NoDocBlock implements NoDocBlockInterface
{
    public function getSomeData($param)
    {
        return $param . ' FOI O PARÂMETRO PASSADO - endpoint 2';
    }
}
