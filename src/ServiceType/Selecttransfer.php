<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Selecttransfer ServiceType
 * @subpackage Services
 */
class Selecttransfer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named select_transfer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $notes
     * @param string $reference_agency
     * @param string $locator
     * @param \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data
     * @param \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO[] $occupations
     * @param string $ip_client
     * @return \Maseuropa\Booking\StructType\SARetvalSelectNormalWSDO|bool
     */
    public function select_transfer(\Maseuropa\Booking\StructType\Auth $auth, $notes, $reference_agency, $locator, \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data, array $occupations, $ip_client)
    {
        try {
            $this->setResult($this->getSoapClient()->select_transfer($auth, $notes, $reference_agency, $locator, $b2c_data, $occupations, $ip_client));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\SARetvalSelectNormalWSDO
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
