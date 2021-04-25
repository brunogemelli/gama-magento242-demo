<?php

namespace GamaAcademy\Vacina\ViewModel;

use Magento\Directory\Api\CountryInformationAcquirerInterface ;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class MyViewModel implements ArgumentInterface
{
    /**
     * @var CountryInformationAcquirerInterface
     */
    private $countryInformationAcquirer;

    /**
     * MyViewModel constructor.
     * @param CountryInformationAcquirerInterface $countryInformationAcquirer
     */
    public function __construct(CountryInformationAcquirerInterface $countryInformationAcquirer)
    {
        $this->countryInformationAcquirer = $countryInformationAcquirer;
    }

    /**
     * @return \Magento\Framework\DataObject[]
     */
    public function getCountries()
    {
        return $this->countryInformationAcquirer->getCountriesInfo();
    }

}
