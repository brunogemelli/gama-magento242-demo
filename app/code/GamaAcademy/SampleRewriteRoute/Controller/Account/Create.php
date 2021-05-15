<?php

namespace GamaAcademy\SampleRewriteRoute\Controller\Account;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;

class Create implements HttpGetActionInterface
{
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
        $a = 1;
        die('teste rewrite customer/account/create');
    }
}
