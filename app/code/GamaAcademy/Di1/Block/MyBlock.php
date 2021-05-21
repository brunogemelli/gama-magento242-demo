<?php

namespace GamaAcademy\Di1\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use GamaAcademy\Di1\Helper\MyClassInterface;

class MyBlock extends Template
{
    /**
     * @var MyClassInterface
     */
    private $myClass;

    public function __construct(
        MyClassInterface $myClass,
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->myClass = $myClass;
    }

    public function getList()
    {
        return $this->myClass->getItems();
    }
}
