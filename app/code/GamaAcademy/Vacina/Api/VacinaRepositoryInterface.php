<?php

namespace GamaAcademy\Vacina\Api;

use GamaAcademy\Vacina\Api\Data\VacinaInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface VacinaRepositoryInterface
{
    /**
     * Retrieve vacina.
     *
     * @param string $idVacina
     * @return \GamaAcademy\Vacina\Api\Data\VacinaInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($idVacina);

    /**
     * Retrieve blocks matching the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return \GamaAcademy\Vacina\Api\Data\VacinaSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * Save vacina.
     *
     * @param \GamaAcademy\Vacina\Api\Data\VacinaInterface $vacina
     * @return \GamaAcademy\Vacina\Api\Data\VacinaInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(VacinaInterface $vacina);

    /**
     * Delete block.
     *
     * @param \GamaAcademy\Vacina\Api\Data\VacinaInterface $vacina
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(VacinaInterface $vacina);

    /**
     * Delete vacina by ID.
     *
     * @param string $idVacina
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($idVacina);
}
