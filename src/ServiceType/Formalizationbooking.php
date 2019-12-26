<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Formalizationbooking ServiceType
 * @subpackage Services
 */
class Formalizationbooking extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named formalization_booking
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $locator
     * @param string $direct_payment_supplier
     * @param string $air_external
     * @param string $low_cost
     * @param string $show_central
     * @param \Maseuropa\Booking\StructType\FVParamChargeWS $charge
     * @param string $reference_agency
     * @param string $amadeus_issuance
     * @param \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data
     * @param string $notes
     * @param string $confidential_information
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking|bool
     */
    public function formalization_booking(\Maseuropa\Booking\StructType\Auth $auth, $locator, $direct_payment_supplier, $air_external, $low_cost, $show_central, \Maseuropa\Booking\StructType\FVParamChargeWS $charge, $reference_agency, $amadeus_issuance, \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data, $notes, $confidential_information)
    {
        try {
            $this->setResult($this->getSoapClient()->formalization_booking($auth, $locator, $direct_payment_supplier, $air_external, $low_cost, $show_central, $charge, $reference_agency, $amadeus_issuance, $b2c_data, $notes, $confidential_information));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
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
