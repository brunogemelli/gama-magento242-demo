<?php

declare(strict_types=1);

namespace GamaAcademy\Customer\Setup\Patch\Data;

use Magento\Customer\Api\CustomerMetadataInterface;
use Magento\Customer\Setup\CustomerSetup;
use Magento\Customer\Setup\CustomerSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class CreateMotherNameAttribute implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var CustomerSetupFactory
     */
    private $customerSetupFactory;

    /**
     * CreateMotherNameAttribute constructor.
     * @param ModuleDataSetupInterface $resourceConnection
     * @param CustomerSetupFactory $customerSetupFactory
     */
    public function __construct(
        ModuleDataSetupInterface $resourceConnection,
        CustomerSetupFactory $customerSetupFactory
    ) {
        $this->moduleDataSetup = $resourceConnection;
        $this->customerSetupFactory = $customerSetupFactory;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {
        /** @var CustomerSetup $customerSetup */
        $customerSetup = $this->customerSetupFactory->create(['setup' => $this->moduleDataSetup]);

        $attributeCode = 'mother_name';

        /**
         * Creating the attribute (eav_attribute)
         */
        $customerSetup->addAttribute(
            CustomerMetadataInterface::ENTITY_TYPE_CUSTOMER,
            $attributeCode,
            [
                'type'         => 'varchar',
                'label'        => 'Mother Name',
                'input'        => 'text',
                'required'     => false,
                'visible'      => true,
                'user_defined' => true,
                'position'     => 999,
                'system'       => 0,
            ]
        );

        /**
         * Adding the attribute to the customer attribute set (eav_entity_attribute table)
         */
        $customerSetup->addAttributeToSet(
            CustomerMetadataInterface::ENTITY_TYPE_CUSTOMER,
            CustomerMetadataInterface::ATTRIBUTE_SET_ID_CUSTOMER,
            null,
            $attributeCode
        );

        /**
         * Adding the new attribute to the customer forms
         */
        $attribute = $customerSetup->getEavConfig()
            ->getAttribute(CustomerMetadataInterface::ENTITY_TYPE_CUSTOMER, $attributeCode)
            ->addData([
                'used_in_forms' => [
                    'adminhtml_customer',
                    'adminhtml_checkout',
                    'customer_account_create',
                    'customer_account_edit'
                ]
            ]);

        $attribute->save();
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }
}
