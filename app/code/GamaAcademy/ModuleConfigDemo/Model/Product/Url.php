<?php

namespace GamaAcademy\ModuleConfigDemo\Model\Product;

use GamaAcademy\ModuleConfigDemo\Model\EraserDependency;
use GamaAcademy\ModuleConfigDemo\Model\EraserInterface;
use GamaAcademy\ModuleConfigDemo\Model\PenInterface;
use Magento\Catalog\Model\Product\Url as UrlCore;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Filter\FilterManager;
use Magento\Framework\Session\SidResolverInterface;
use Magento\Framework\UrlFactory;
use Magento\Store\Model\StoreManagerInterface;
use Magento\UrlRewrite\Model\UrlFinderInterface;

class Url extends UrlCore
{
    /**
     * @var EraserDependency
     */
    private $classBruno;
    /**
     * @var PenInterface
     */
    private $pen;
    /**
     * @var EraserInterface
     */
    private $eraser;

    /**
     * Url constructor.
     * @param EraserDependency $classBruno
     * @param EraserInterface $eraser
     * @param PenInterface $pen
     * @param UrlFactory $urlFactory
     * @param StoreManagerInterface $storeManager
     * @param FilterManager $filter
     * @param SidResolverInterface $sidResolver
     * @param UrlFinderInterface $urlFinder
     * @param array $data
     * @param ScopeConfigInterface|null $scopeConfig
     */
    public function __construct(
        EraserDependency $classBruno,
        EraserInterface $eraser,
        PenInterface $pen,
        UrlFactory $urlFactory,
        StoreManagerInterface $storeManager,
        FilterManager $filter,
        SidResolverInterface $sidResolver,
        UrlFinderInterface $urlFinder,
        array $data = [],
        ScopeConfigInterface $scopeConfig = null
    ) {
        parent::__construct(
            $urlFactory,
            $storeManager,
            $filter,
            $sidResolver,
            $urlFinder,
            $data,
            $scopeConfig
        );
        $this->classBruno = $classBruno;
        $this->pen = $pen;
        $this->eraser = $eraser;
    }

    /**
     * @param \Magento\Catalog\Model\Product $product
     * @param null $useSid
     * @return string
     */
    public function getProductUrl($product, $useSid = null)
    {
        $params = [];
        if (!$useSid) {
            $params['_nosid'] = true;
        }

        $params['anything'] = $this->classBruno->getRandNumber();
        $params['brand'] = $this->pen->getBrand();
        $params['eraser1_size'] = $this->eraser->getSize();

        $params['eraser2_size'] = $this->classBruno->getSize();

        return $this->getUrl($product, $params);
    }

}
