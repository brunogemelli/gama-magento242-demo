<?php

namespace GamaAcademy\ModuleConfigDemo\Model;

class EraserDependency
{
    /**
     * @var string
     */
    private $size;

    /**
     * EraserDependency constructor.
     * @param string $size
     */
    public function __construct(string $size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getRandNumber(): string
    {
        return (string) rand(0, 1000000000);
    }
}
