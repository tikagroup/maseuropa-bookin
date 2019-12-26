<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Selectflight ServiceType
 * @subpackage Services
 */
class Selectflight extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named select_flight
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $notes
     * @param \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO[] $occupations
     * @param \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data
     * @param string $reference_agency
     * @param string $residente
     * @param string $ip_client
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO|bool
     */
    public function select_flight(\Maseuropa\Booking\StructType\Auth $auth, $notes, array $occupations, \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data, $reference_agency, $residente, $ip_client)
    {
        try {
            $this->setResult($this->getSoapClient()->select_flight($auth, $notes, $occupations, $b2c_data, $reference_agency, $residente, $ip_client));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
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
