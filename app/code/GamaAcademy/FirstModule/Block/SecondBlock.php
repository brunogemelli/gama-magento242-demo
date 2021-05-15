<?php

namespace GamaAcademy\FirstModule\Block;

use Magento\Framework\View\Element\Template as MagentoBlockDefault;
use GamaAcademy\FirstModule\Block\FirstBlock;
use GamaAcademy\FirstModule\Block\Sub\FirstBlock as FirstBlockSub;

class SecondBlock extends MagentoBlockDefault
{
    /**
     * @var \GamaAcademy\FirstModule\Block\FirstBlock
     */
    private $firstBlock;

    /**
     * @var FirstBlockSub
     */
    private $firstBlockSub;

    /**
     * SecondBlock constructor.
     * @param \GamaAcademy\FirstModule\Block\FirstBlock $firstBlock
     * @param FirstBlockSub $firstBlockSub
     * @param MagentoBlockDefault $context
     * @param array $data
     */
    public function __construct(
        FirstBlock $firstBlock,
        FirstBlockSub $firstBlockSub,
        MagentoBlockDefault $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->firstBlock = $firstBlock;
        $this->firstBlockSub = $firstBlockSub;
    }

    public function getValue1()
    {
        return $this->firstBlock->getRandomNumber();
    }

    public function getValue2()
    {
        return $this->firstBlockSub->getStaticNumber();
    }
}
