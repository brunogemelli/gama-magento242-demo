<?php

namespace GamaAcademy\ModuleConfigDemo\Model;

class PenXpto implements PenInterface
{
    /**
     * @return string
     */
    public function getBrand(): string
    {
        return 'XPTO';
    }
}
