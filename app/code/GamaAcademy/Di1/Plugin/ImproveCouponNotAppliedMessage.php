<?php

namespace GamaAcademy\Di1\Plugin;

use Magento\SalesRule\Model\RulesApplier;
use Magento\Framework\Exception\LocalizedException;

class ImproveCouponNotAppliedMessage
{
    public function afterApplyRules(
        RulesApplier $subject,
        $result,
        $item,
        $rules,
        $skipValidation,
        $couponCode
    ) {
        if (empty($result) && $couponCode == 'TEST001') {
            throw new LocalizedException(__('The coupon exists but it could not be applied.'));
        }

        return $result;
    }
}
