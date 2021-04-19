<?php

namespace GamaAcademy\ModuleConfigDemo\Model;

class PenBic implements PenInterface
{
    /**
     * @return string
     */
    public function getBrand(): string
    {
        return 'Bic';
    }
}
