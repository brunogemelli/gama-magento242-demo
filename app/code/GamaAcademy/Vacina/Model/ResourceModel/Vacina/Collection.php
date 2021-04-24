<?php

namespace GamaAcademy\Vacina\Model\ResourceModel\Vacina;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \GamaAcademy\Vacina\Model\Vacina::class,
            \GamaAcademy\Vacina\Model\ResourceModel\Vacina::class
        );
    }
}
