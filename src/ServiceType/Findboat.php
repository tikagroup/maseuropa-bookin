<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Findboat ServiceType
 * @subpackage Services
 */
class Findboat extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named find_boat
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $country_zone_id
     * @param string $zone_id
     * @param string $date
     * @param string $num_days
     * @param string $id_boat
     * @param string $num_cabin
     * @param string $num_cabin_min
     * @param string $num_cabin_max
     * @param string $constr_year
     * @param string $constr_year_min
     * @param string $constr_year_max
     * @param string $boat_type
     * @param string $crew
     * @param string $long_min
     * @param string $long_max
     * @param \Maseuropa\Booking\StructType\FAParamOccupationBoatWS $occupation_boat
     * @param \Maseuropa\Booking\StructType\FAParamCabinWS[] $cabin
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO|bool
     */
    public function find_boat(\Maseuropa\Booking\StructType\Auth $auth, $article_class_type_id, $country_zone_id, $zone_id, $date, $num_days, $id_boat, $num_cabin, $num_cabin_min, $num_cabin_max, $constr_year, $constr_year_min, $constr_year_max, $boat_type, $crew, $long_min, $long_max, \Maseuropa\Booking\StructType\FAParamOccupationBoatWS $occupation_boat, array $cabin)
    {
        try {
            $this->setResult($this->getSoapClient()->find_boat($auth, $article_class_type_id, $country_zone_id, $zone_id, $date, $num_days, $id_boat, $num_cabin, $num_cabin_min, $num_cabin_max, $constr_year, $constr_year_min, $constr_year_max, $boat_type, $crew, $long_min, $long_max, $occupation_boat, $cabin));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
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
