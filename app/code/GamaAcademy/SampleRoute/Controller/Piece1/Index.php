<?php

namespace GamaAcademy\SampleRoute\Controller\Piece1;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index implements HttpGetActionInterface
{
    private $resultFactory;

    /**
     * Bruno constructor.
     * @param ResultFactory $resultFactory
     */
    public function __construct(ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     *
     * sample/piece/piece2
     *
     */
    public function execute()
    {
        /**
         * JSON
         */
//        $responseContent = [
//            'chave1' => 'valor1',
//            'chave2' => 'valor2',
//        ];
//
//        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);
//        return $resultJson->setData($responseContent);


        /**
         * RAW
         */
//        $resultRaw = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//        return $resultRaw->setContents('Teste result raw');

        /**
         * REDIRECT
         */
//        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
//        $resultRedirect->setPath('*/*/create');
//        return $resultRedirect;

        /**
         * FORWARD
         */
//        $resultForward = $this->resultFactory->create(ResultFactory::TYPE_FORWARD);
//        return $resultForward->forward('create');


        /**
         * PAGE
         */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}
