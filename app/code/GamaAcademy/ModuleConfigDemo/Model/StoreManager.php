<?php

namespace GamaAcademy\ModuleConfigDemo\Model;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface as SeuApelido;

class StoreManager implements SeuApelido
{

    /**
     * Allow or disallow single store mode
     *
     * @param bool $value
     * @return void
     */
    public function setIsSingleStoreModeAllowed($value)
    {
        // TODO: Implement setIsSingleStoreModeAllowed() method.
    }

    /**
     * Check if store has only one store view
     *
     * @return bool
     */
    public function hasSingleStore()
    {
        return $this->getTesteDoBruno();

        return true;
    }

    /**
     * Check if system is run in the single store mode
     *
     * @return bool
     */
    public function isSingleStoreMode()
    {
        return true;
    }

    /**
     * Retrieve application store object
     *
     * @param null|string|bool|int|\Magento\Store\Api\Data\StoreInterface $storeId
     * @return \Magento\Store\Api\Data\StoreInterface
     * @throws NoSuchEntityException If given store doesn't exist.
     */
    public function getStore($storeId = null)
    {
        // TODO: Implement getStore() method.
    }

    /**
     * Retrieve stores array
     *
     * @param bool $withDefault
     * @param bool $codeKey
     * @return \Magento\Store\Api\Data\StoreInterface[]
     */
    public function getStores($withDefault = false, $codeKey = false)
    {
        // TODO: Implement getStores() method.
    }

    /**
     * Retrieve application website object
     *
     * @param null|bool|int|string|\Magento\Store\Api\Data\WebsiteInterface $websiteId
     * @return \Magento\Store\Api\Data\WebsiteInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getWebsite($websiteId = null)
    {
        // TODO: Implement getWebsite() method.
    }

    /**
     * Get loaded websites
     *
     * @param bool $withDefault
     * @param bool $codeKey
     * @return \Magento\Store\Api\Data\WebsiteInterface[]
     */
    public function getWebsites($withDefault = false, $codeKey = false)
    {
        // TODO: Implement getWebsites() method.
    }

    /**
     * Reinitialize store list
     *
     * @return void
     */
    public function reinitStores()
    {
        // TODO: Implement reinitStores() method.
    }

    /**
     * Retrieve default store for default group and website
     *
     * @return \Magento\Store\Api\Data\StoreInterface|null
     */
    public function getDefaultStoreView()
    {
        // TODO: Implement getDefaultStoreView() method.
    }

    /**
     * Retrieve application store group object
     *
     * @param null|\Magento\Store\Api\Data\GroupInterface|string $groupId
     * @return \Magento\Store\Api\Data\GroupInterface
     */
    public function getGroup($groupId = null)
    {
        // TODO: Implement getGroup() method.
    }

    /**
     * Prepare array of store groups
     *
     * @param bool $withDefault
     * @return \Magento\Store\Api\Data\GroupInterface[]
     */
    public function getGroups($withDefault = false)
    {
        // TODO: Implement getGroups() method.
    }

    /**
     * Set current default store
     *
     * @param string|int|\Magento\Store\Api\Data\StoreInterface $store
     * @return void
     */
    public function setCurrentStore($store)
    {
        // TODO: Implement setCurrentStore() method.
    }
}
