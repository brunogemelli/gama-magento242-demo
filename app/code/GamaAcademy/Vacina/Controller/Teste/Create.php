<?php

namespace GamaAcademy\Vacina\Controller\Teste;

use GamaAcademy\Vacina\Api\VacinaRepositoryInterface;
use GamaAcademy\Vacina\Api\Data\VacinaInterfaceFactory;
use GamaAcademy\Vacina\Model\ResourceModel\Vacina\CollectionFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Api\SearchCriteriaBuilderFactory;
use Magento\Framework\Api\SortOrderBuilder;

class Create implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @var VacinaInterfaceFactory
     */
    private $vacinaFactory;
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var VacinaRepositoryInterface
     */
    private $vacinaRepository;

    /**
     * @var SearchCriteriaBuilderFactory
     */
    private $searchCriteriaBuilderFactory;
    /**
     * @var SortOrderBuilder
     */
    private $sortOrderBuilder;

    /**
     * Create constructor.
     * @param VacinaRepositoryInterface $vacinaRepository
     * @param VacinaInterfaceFactory $vacinaFactory
     * @param CollectionFactory $collectionFactory
     * @param SearchCriteriaBuilderFactory $searchCriteriaBuilderFactory
     * @param SortOrderBuilder $sortOrderBuilder
     * @param PageFactory $pageFactory
     */
    public function __construct(
        VacinaRepositoryInterface $vacinaRepository,
        VacinaInterfaceFactory $vacinaFactory,
        CollectionFactory $collectionFactory,
        SearchCriteriaBuilderFactory $searchCriteriaBuilderFactory,
        SortOrderBuilder $sortOrderBuilder,
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->vacinaFactory = $vacinaFactory;
        $this->collectionFactory = $collectionFactory;
        $this->vacinaRepository = $vacinaRepository;
        $this->searchCriteriaBuilderFactory = $searchCriteriaBuilderFactory;
        $this->sortOrderBuilder = $sortOrderBuilder;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        try {

            /** @var \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder */
            $searchCriteriaBuilder = $this->searchCriteriaBuilderFactory->create();

            /**
             * adicionando filtros (WHERE, AND)
             */
            $searchCriteriaBuilder->addFilter(
                \GamaAcademy\Vacina\Api\Data\VacinaInterface::PAIS,
                'Brasil'
            );


            /**
             * adicionando paginação (LIMIT n OFFSET n)
             */
            $searchCriteriaBuilder->setPageSize(2);
            $searchCriteriaBuilder->setCurrentPage(2);

            /**
             * adicionando ordenação (ORDER BY)
             */
            $sortOrder = $this->sortOrderBuilder
                ->setField('eficacia')
                ->setDirection('DESC')
                ->create();
            $searchCriteriaBuilder->addSortOrder($sortOrder);


            $lista = $this->vacinaRepository->getList($searchCriteriaBuilder->create());


            $tamanhoTotal = $lista->getTotalCount();

            /** @var \GamaAcademy\Vacina\Api\Data\VacinaInterface $item */
            foreach ($lista->getItems() as $item) {
                $nomeVacina = $item->getNome();
                $paisVacina = $item->getPais();
            }

        } catch (\Exception $e) {
            $a = 1;
        }

        return $this->pageFactory->create();
    }

    private function testRepository1()
    {
        /**
         * carregando
         */
        $vacina = $this->vacinaRepository->getById(13);


        /**
         * apagando
         */
        $this->vacinaRepository->delete($vacina);
        $this->vacinaRepository->deleteById(13);



        /**
         * Vacina 1
         */
        $vacina = $this->vacinaFactory->create();
        $vacina->setNome('Nome 10');
        $vacina->setFabricante('Fab 10');
        $vacina->setLaboratorio('lab 10');
        $vacina->setDisponivel(true);
        $vacina->setEficacia(100);
        $vacina->setNroDoses(2);
        $vacina->setPais('Brasil');

        $this->vacinaRepository->save($vacina);
    }



    private function testModel()
    {
        $vacina1 = $this->vacinaFactory->create();
        $vacina1 = $vacina1->load(5);

        return;

        /**
         * Vacina 1
         */
        $vacina = $this->vacinaFactory->create();
        $vacina->setNome('Nome 1');
        $vacina->setFabricante('Fab 1');
        $vacina->setLaboratorio('lab 1');
        $vacina->setDisponivel(true);
        $vacina->setEficacia(100);
        $vacina->setNroDoses(2);
        $vacina->setPais('Brasil');
        $vacina->save();

        /**
         * Vacina 1
         */
        $vacina = $this->vacinaFactory->create();
        $vacina->setNome('Nome 2');
        $vacina->setFabricante('Fab 2');
        $vacina->setLaboratorio('lab 2');
        $vacina->setDisponivel(false);
        $vacina->setPais('Brasil');
        $vacina->save();
    }


    private function testCollection()
    {
        /** @var \GamaAcademy\Vacina\Model\ResourceModel\Vacina\Collection $collection */
        $collection = $this->collectionFactory->create();

        $collection->addFieldToSelect(['nome', 'fabricante', 'laboratorio']);
        $collection->addFieldToFilter('disponivel', true);
        $collection->addFieldToFilter('eficacia', ['gteq' => 50]);

        $collection->getSelect()->order('eficacia');

        /** @var \GamaAcademy\Vacina\Api\Data\VacinaInterface $item */
        foreach ($collection->getItems() as $item) {
            $name = $item->getNome();
            $a = 1;
        }


        $collection->addFieldToFilter('pais', 'Guatemala');
        foreach ($collection->getItems() as $item) {
            $name = $item->getNome();
            $a = 1;
        }
    }
}



