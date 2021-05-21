<?php

namespace GamaAcademy\Di2\Model;

use Magento\Customer\Api\AccountManagementInterface;

class OtherClass
{
    public function beforeCreateAccount(
        AccountManagementInterface $subject,
        \Magento\Customer\Api\Data\CustomerInterface $customer,
        $password = null,
        $redirectUrl = ''
    ) {
        $a = 1;
    }
}
