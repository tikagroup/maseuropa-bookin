<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancellationrequest ServiceType
 * @subpackage Services
 */
class Cancellationrequest extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancellation_request
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $booking_id
     * @param string $locator
     * @return Array|bool
     */
    public function cancellation_request(\Maseuropa\Booking\StructType\Auth $auth, $booking_id, $locator)
    {
        try {
            $this->setResult($this->getSoapClient()->cancellation_request($auth, $booking_id, $locator));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return Array
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
