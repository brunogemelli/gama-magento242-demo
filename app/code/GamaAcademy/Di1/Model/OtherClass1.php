<?php

namespace GamaAcademy\Di1\Model;

use Magento\Customer\Api\AccountManagementInterface;

class OtherClass1
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
