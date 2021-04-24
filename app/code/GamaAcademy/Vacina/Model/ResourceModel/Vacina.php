<?php

namespace GamaAcademy\Vacina\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Vacina extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'gamaacademy_vacina',
            'id'
        );
    }
}
