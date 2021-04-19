<?php

namespace GamaAcademy\ModuleConfigDemo\Model;

class PenFaber implements PenInterface
{
    /**
     * @return string
     */
    public function getBrand(): string
    {
        return 'Faber Castell';
    }
}
