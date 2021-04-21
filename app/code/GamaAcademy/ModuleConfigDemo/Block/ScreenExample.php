<?php

namespace GamaAcademy\ModuleConfigDemo\Block;

use Magento\Framework\View\Element\Template;

class ScreenExample extends Template
{
//    protected $_template = 'GamaAcademy_ModuleConfigDemo::screen.phtml';

    /**
     * @param string $template
     * @return ScreenExample
     */
    public function setTemplate($template)
    {
        return parent::setTemplate($template);
//        return 'GamaAcademy_ModuleConfigDemo::screen.phtml';
    }

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
