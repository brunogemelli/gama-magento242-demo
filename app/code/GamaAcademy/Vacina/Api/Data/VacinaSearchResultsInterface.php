<?php

namespace GamaAcademy\Vacina\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface VacinaSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get vacina list.
     *
     * @return \GamaAcademy\Vacina\Api\Data\VacinaInterface[]
     */
    public function getItems();

    /**
     * Set vacina list.
     *
     * @param \GamaAcademy\Vacina\Api\Data\VacinaInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
