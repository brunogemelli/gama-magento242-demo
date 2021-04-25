<?php

namespace GamaAcademy\Vacina\Controller\Teste;

use GamaAcademy\Vacina\Api\VacinaRepositoryInterface;
use GamaAcademy\Vacina\Api\Data\VacinaInterfaceFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Message\ManagerInterface;
use Psr\Log\LoggerInterface;

class Create extends Action implements HttpGetActionInterface, HttpPostActionInterface
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
     * @var VacinaRepositoryInterface
     */
    private $vacinaRepository;
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Create constructor.
     * @param VacinaRepositoryInterface $vacinaRepository
     * @param VacinaInterfaceFactory $vacinaFactory
     * @param PageFactory $pageFactory
     * @param ManagerInterface $messageManager
     * @param Context $context
     */
    public function __construct(
        VacinaRepositoryInterface $vacinaRepository,
        VacinaInterfaceFactory $vacinaFactory,
        PageFactory $pageFactory,
        ManagerInterface $messageManager,
        LoggerInterface $logger,
        Context $context
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->vacinaFactory = $vacinaFactory;
        $this->vacinaRepository = $vacinaRepository;
        $this->messageManager = $messageManager;
        $this->logger = $logger;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            return $this->pageFactory->create();
        }

        try {
            $vacina = $this->vacinaFactory->create();
            $vacina->setData($this->getRequest()->getParams());
            $this->vacinaRepository->save($vacina);
            $this->messageManager->addSuccessMessage(__('You saved the vaccine.'));
        } catch (\Exception $exception) {
            $this->logger->error($exception->getMessage());
            $this->messageManager->addErrorMessage(__('Error saving the vaccine.'));
        }

        return $this->pageFactory->create();
    }
}



