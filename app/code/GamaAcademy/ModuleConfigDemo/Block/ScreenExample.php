<?php

namespace GamaAcademy\ModuleConfigDemo\Block;

use Magento\Framework\View\Element\Template;

class ScreenExample extends Template
{

    /**
     * @return mixed
     */
    public function getRequestValue($paramName)
    {
        return $this->getRequest()->getParam($paramName);
    }

    /**
     * @return string
     */
    public function getMyMethodWithMyLogic(): string
    {
        return 'Test';
    }
}
