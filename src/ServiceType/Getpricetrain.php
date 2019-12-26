<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Getpricetrain ServiceType
 * @subpackage Services
 */
class Getpricetrain extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named get_price_train
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $search_id
     * @param string $result_from_id
     * @param string $result_to_id
     * @param \Maseuropa\Booking\StructType\FaresPax[] $fares_paxes
     * @return struct|bool
     */
    public function get_price_train(\Maseuropa\Booking\StructType\Auth $auth, $search_id, $result_from_id, $result_to_id, array $fares_paxes)
    {
        try {
            $this->setResult($this->getSoapClient()->get_price_train($auth, $search_id, $result_from_id, $result_to_id, $fares_paxes));
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
