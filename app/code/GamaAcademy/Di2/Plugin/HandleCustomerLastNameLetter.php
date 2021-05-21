<?php

namespace GamaAcademy\Di2\Plugin;

use Magento\Customer\Api\AccountManagementInterface;
use Magento\Framework\Exception\LocalizedException;

class HandleCustomerLastNameLetter
{
    public function beforeCreateAccount(
        AccountManagementInterface $subject,
        \Magento\Customer\Api\Data\CustomerInterface $customer,
        $password = null,
        $redirectUrl = ''
    ) {
        $name = $customer->getFirstname();

        //pega a ultima letra do nome e se for != 'a', coloca 'a'
        $customer->setFirstname('Bruna');

        return [$customer, $password, $redirectUrl];
    }
}
