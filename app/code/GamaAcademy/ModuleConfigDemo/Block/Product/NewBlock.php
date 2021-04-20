<?php

namespace GamaAcademy\ModuleConfigDemo\Block\Product;

use Magento\Catalog\Helper\Data as CatalogHelper;
use Magento\Framework\View\Element\Template;

class NewBlock extends Template
{
    /**
     * @var CatalogHelper
     */
    private $catalogHelper;

    /**
     * Request constructor.
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        CatalogHelper $catalogHelper,
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->catalogHelper = $catalogHelper;
    }

    /**
     * @return string
     */
    public function toHtml()
    {
        if (!$this->canShow()) {
            return '';
        }

        return parent::toHtml();
    }

    /**
     * @return bool
     */
    public function canShow(): bool
    {
        return true;
        return (str_contains($this->getProduct()->getName(), 'BRUNO'));
    }

    /**
     * @return string
     */
    public function getFormUrl(): string
    {
        return $this->getUrl('your-custom-route');
    }

    /**
     * @return \Magento\Catalog\Model\Product|null
     */
    public function getProduct()
    {
        return $this->catalogHelper->getProduct();
    }
}
