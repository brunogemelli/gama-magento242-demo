<?php

namespace GamaAcademy\Di1\Helper;

use GamaAcademy\Di1\Helper\MyClassInterface;

class MyClass implements MyClassInterface
{
    /**
     * @var string
     */
    private $test;

    public function __construct(
        string $test = 'default'
    ) {
        $this->test = $test;
    }

    public function getItems()
    {
        return [
            'item1',
            'item2',
            'item3',
        ];
    }
}
