<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Findinsurances ServiceType
 * @subpackage Services
 */
class Findinsurances extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named find_insurances
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $locator
     * @return struct|bool
     */
    public function find_insurances(\Maseuropa\Booking\StructType\Auth $auth, $locator)
    {
        try {
            $this->setResult($this->getSoapClient()->find_insurances($auth, $locator));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return struct
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
