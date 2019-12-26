<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancellationfees ServiceType
 * @subpackage Services
 */
class Cancellationfees extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancellation_fees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $result_id
     * @param \Maseuropa\Booking\StructType\CFParamOccupationWS[] $occupations
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO[]|bool
     */
    public function cancellation_fees(\Maseuropa\Booking\StructType\Auth $auth, $result_id, array $occupations)
    {
        try {
            $this->setResult($this->getSoapClient()->cancellation_fees($auth, $result_id, $occupations));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO[]
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
