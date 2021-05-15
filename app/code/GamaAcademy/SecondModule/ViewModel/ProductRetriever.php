<?php

namespace GamaAcademy\SecondModule\ViewModel;

use Magento\Catalog\Model\Product;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\Registry;

class ProductRetriever implements ArgumentInterface
{
    private $product = null;

    /**
     * @var Registry
     */
    private $registry;

    /**
     * ProductRetriever constructor.
     * @param Registry $registry
     */
    public function __construct(Registry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        if (!$this->product) {
            $this->product = $this->registry->registry('product');
        }

        return $this->product;
    }

}
