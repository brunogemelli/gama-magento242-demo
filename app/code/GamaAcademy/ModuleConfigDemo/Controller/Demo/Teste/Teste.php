<?php

namespace GamaAcademy\ModuleConfigDemo\Controller\Demo\Teste;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;

class Teste implements HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    private $resultRawFactory;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var ProductFactory
     */
    private $productFactory;

    /**
     * Index constructor.
     * @param Product $product
     * @param ProductFactory $productFactory
     * @param \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
     */
    public function __construct(
        Product $product,
        ProductFactory $productFactory,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;
        $this->product = $product;
        $this->productFactory = $productFactory;
    }

    /**
     * testing purposes
     * ex: https://sampledata.magento242.dev.com/gama/demo/teste_teste
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $resultRaw */
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents('teste teste');
        return $resultRaw;
    }

}
