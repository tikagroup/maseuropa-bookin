<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Findnormal ServiceType
 * @subpackage Services
 */
class Findnormal extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named find_normal
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $entry_date
     * @param string $nights
     * @param string $article_class_type_id
     * @param string $article_id
     * @param string $central_visible
     * @param string $article_superclass_type_id
     * @param string $country_zone_id
     * @param string $zone_id
     * @param string $city
     * @param string $province
     * @param string $company_name
     * @param string $supplier_id
     * @param string $category
     * @param string $board_supplement
     * @param string $only_quotas
     * @param string $only_offers
     * @param \Maseuropa\Booking\StructType\FAParamOccupationWS[] $occupations
     * @param string $language_id
     * @param string $no_description
     * @param string $resident
     * @param string $best_price_supplier
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO[]|bool
     */
    public function find_normal(\Maseuropa\Booking\StructType\Auth $auth, $entry_date, $nights, $article_class_type_id, $article_id, $central_visible, $article_superclass_type_id, $country_zone_id, $zone_id, $city, $province, $company_name, $supplier_id, $category, $board_supplement, $only_quotas, $only_offers, array $occupations, $language_id, $no_description, $resident, $best_price_supplier)
    {
        try {
            $this->setResult($this->getSoapClient()->find_normal($auth, $entry_date, $nights, $article_class_type_id, $article_id, $central_visible, $article_superclass_type_id, $country_zone_id, $zone_id, $city, $province, $company_name, $supplier_id, $category, $board_supplement, $only_quotas, $only_offers, $occupations, $language_id, $no_description, $resident, $best_price_supplier));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO[]
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
