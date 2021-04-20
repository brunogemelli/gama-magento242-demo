<?php

namespace GamaAcademy\RestApiDemo\Service;

use GamaAcademy\RestApiDemo\Api\DocBlockInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class DocBlock implements DocBlockInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * DocBlock constructor.
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param string $param
     * @return string
     */
    public function getSomeData($param)
    {
//        $product = $this->productRepository->get('meu-sku');
//        return $product->getName();
        return $param . ' FOI O PARÂMETRO PASSADO';
    }
}
