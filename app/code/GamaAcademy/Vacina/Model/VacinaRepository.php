<?php

namespace GamaAcademy\Vacina\Model;

use GamaAcademy\Vacina\Api\Data\VacinaSearchResultsInterfaceFactory;
use GamaAcademy\Vacina\Model\ResourceModel\Vacina\CollectionFactory;
use GamaAcademy\Vacina\Api\Data\VacinaInterface;
use GamaAcademy\Vacina\Api\VacinaRepositoryInterface;
use GamaAcademy\Vacina\Api\Data\VacinaInterfaceFactory;
use GamaAcademy\Vacina\Model\ResourceModel\Vacina as ResourceModel;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;
use Magento\Framework\Exception\AbstractAggregateException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\EntityManager\HydratorInterface;


class VacinaRepository implements VacinaRepositoryInterface
{
    /**
     * @var VacinaInterfaceFactory
     */
    private $vacinaFactory;

    /**
     * @var ResourceModel
     */
    private $resource;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var CollectionProcessor
     */
    private $collectionProcessor;

    /**
     * @var VacinaSearchResultsInterfaceFactory
     */
    private $searchResultsFactory;

    /**
     * @var HydratorInterface
     */
    private $hydrator;

    /**
     * VacinaRepository constructor.
     * @param CollectionFactory $collectionFactory
     * @param VacinaInterfaceFactory $vacinaFactory
     * @param ResourceModel $resource
     * @param CollectionProcessor $collectionProcessor
     * @param HydratorInterface $hydrator
     * @param VacinaSearchResultsInterfaceFactory $searchResultsFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        VacinaInterfaceFactory $vacinaFactory,
        ResourceModel $resource,
        CollectionProcessor $collectionProcessor,
        HydratorInterface $hydrator,
        VacinaSearchResultsInterfaceFactory  $searchResultsFactory
    ) {
        $this->vacinaFactory = $vacinaFactory;
        $this->resource = $resource;
        $this->collectionFactory = $collectionFactory;
        $this->collectionProcessor = $collectionProcessor;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->hydrator = $hydrator;
    }

    /**
     * Retrieve vacina.
     *
     * @param string $idVacina
     * @return \GamaAcademy\Vacina\Api\Data\VacinaInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($idVacina)
    {
        $vacina = $this->vacinaFactory->create();
        $this->resource->load($vacina, $idVacina);
        if (!$vacina->getId()) {
            throw new NoSuchEntityException(__('A vacina com o ID "%1" nao existe.', $vacina));
        }
        return $vacina;
    }

    /**
     * Retrieve vacina matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \GamaAcademy\Vacina\Api\Data\VacinaSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        /** @var \GamaAcademy\Vacina\Model\ResourceModel\Vacina\Collection $collection */
        $collection = $this->collectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var \GamaAcademy\Vacina\Api\Data\VacinaSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * Save vacina.
     *
     * @param \GamaAcademy\Vacina\Api\Data\VacinaInterface $vacina
     * @return \GamaAcademy\Vacina\Api\Data\VacinaInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(VacinaInterface $vacina)
    {
        if ($vacina->getId() && $vacina instanceof Vacina && !$vacina->getOrigData()) {
            $vacina = $this->hydrator->hydrate($this->getById($vacina->getId()), $this->hydrator->extract($vacina));
        }

        try {
            $this->resource->save($vacina);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $vacina;
    }

    /**
     * Delete block.
     *
     * @param \GamaAcademy\Vacina\Api\Data\VacinaInterface $vacina
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(VacinaInterface $vacina)
    {
        try {
            $this->resource->delete($vacina);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * Delete vacina by ID.
     *
     * @param string $idVacina
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($idVacina)
    {
        return $this->delete($this->getById($idVacina));
    }
}
