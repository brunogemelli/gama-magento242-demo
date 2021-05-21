<?php

namespace GamaAcademy\Di2\Plugin;

use Magento\Customer\Api\AccountManagementInterface;
use Magento\Framework\Exception\LocalizedException;
use GamaAcademy\Di1\Plugin\ValidatingCustomerLastNameLetter;

class RewriteDePlugin extends ValidatingCustomerLastNameLetter
{
    public function beforeCreateAccount(
        AccountManagementInterface $subject,
        \Magento\Customer\Api\Data\CustomerInterface $customer,
        $password = null,
        $redirectUrl = ''
    ) {
        $lastname = $customer->getLastname();

        if (strlen($lastname) > 1000) {
            //@todo alguma coisa
            $b = 1;
        }

        return parent::beforeCreateAccount($subject, $customer, $password, $redirectUrl);
    }
}
