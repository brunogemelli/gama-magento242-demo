<?php

namespace GamaAcademy\Di1\Plugin;

use Magento\Customer\Api\AccountManagementInterface;
use Magento\Framework\Exception\LocalizedException;

class ValidatingCustomerLastNameLetter
{
    public function beforeCreateAccount(
        AccountManagementInterface $subject,
        \Magento\Customer\Api\Data\CustomerInterface $customer,
        $password = null,
        $redirectUrl = ''
    ) {
        //@todo sua lógica aqui

        $name = $customer->getFirstname();

        if (substr($name, -1) != 'a') {
            throw new LocalizedException(__('Your name must finish with the letter a.'));
        }
    }
}
