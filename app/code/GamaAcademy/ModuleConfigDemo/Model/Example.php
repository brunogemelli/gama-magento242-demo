<?php

namespace GamaAcademy\ModuleConfigDemo\Model;

class Example implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => 'Bruno',
                'label' => __('Bruno')
            ],
            [
                'value' => 'Gemelli',
                'label' => __('Gemelli')
            ]
        ];
    }
}
