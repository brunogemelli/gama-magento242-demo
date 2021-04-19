<?php

namespace GamaAcademy\ModuleConfigDemo\Model;

use GamaAcademy\ModuleConfigDemo\Model\EraserDependency;

class Eraser implements EraserInterface
{
    /**
     * @var \GamaAcademy\ModuleConfigDemo\Model\EraserDependency
     */
    private $eraserDependency;

    /**
     * Eraser constructor.
     * @param \GamaAcademy\ModuleConfigDemo\Model\EraserDependency $eraserDependency
     */
    public function __construct(EraserDependency $eraserDependency)
    {
        $this->eraserDependency = $eraserDependency;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->eraserDependency->getSize();
    }
}
