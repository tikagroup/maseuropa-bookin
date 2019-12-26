<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Findrentacar ServiceType
 * @subpackage Services
 */
class Findrentacar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named find_rentacar
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $origin
     * @param string $origin_date
     * @param string $origin_hour
     * @param string $destiny
     * @param string $destiny_date
     * @param string $destiny_hour
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO|bool
     */
    public function find_rentacar(\Maseuropa\Booking\StructType\Auth $auth, $article_class_type_id, $origin, $origin_date, $origin_hour, $destiny, $destiny_date, $destiny_hour)
    {
        try {
            $this->setResult($this->getSoapClient()->find_rentacar($auth, $article_class_type_id, $origin, $origin_date, $origin_hour, $destiny, $destiny_date, $destiny_hour));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
