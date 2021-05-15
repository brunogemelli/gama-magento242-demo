<?php

namespace GamaAcademy\FirstModule\Block;

use Magento\Framework\View\Element\Template as MagentoBlockDefault;

class FirstBlock extends MagentoBlockDefault
{
    public function getRandomNumber()
    {
        return rand(0, 10000);
    }

    public function getFakeItems()
    {
        return [
            'item1',
            'item2',
            'item3'
        ];
    }
}
