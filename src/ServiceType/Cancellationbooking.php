<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancellationbooking ServiceType
 * @subpackage Services
 */
class Cancellationbooking extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancellation_booking
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $booking_id
     * @param string $locator
     * @param string $confirm
     * @return \Maseuropa\Booking\StructType\CancellationWSDO[]|bool
     */
    public function cancellation_booking(\Maseuropa\Booking\StructType\Auth $auth, $booking_id, $locator, $confirm)
    {
        try {
            $this->setResult($this->getSoapClient()->cancellation_booking($auth, $booking_id, $locator, $confirm));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\CancellationWSDO[]
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
