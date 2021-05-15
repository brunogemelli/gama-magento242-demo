<?php

namespace GamaAcademy\FirstModule\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class MyFirstViewModel implements ArgumentInterface
{
    public function getRandomNumber()
    {
        return rand(0, 10000);
    }
}
