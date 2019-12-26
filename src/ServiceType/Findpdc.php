<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Findpdc ServiceType
 * @subpackage Services
 */
class Findpdc extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named find_pdc
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $id_tipo_articulo_clase
     * @param \Maseuropa\Booking\StructType\FAParamPDCHotel $hotel
     * @param \Maseuropa\Booking\StructType\FAParamPDCFlight $flight
     * @param string $language_id
     * @param string $entry_date
     * @param string $exit_date
     * @param \Maseuropa\Booking\StructType\FAParamOccupationWS[] $occupations
     * @param \Maseuropa\Booking\StructType\FAParamFormFields[] $form_fields
     * @return \Maseuropa\Booking\StructType\FARetvalFindPackageWSDO|bool
     */
    public function find_pdc(\Maseuropa\Booking\StructType\Auth $auth, $id_tipo_articulo_clase, \Maseuropa\Booking\StructType\FAParamPDCHotel $hotel, \Maseuropa\Booking\StructType\FAParamPDCFlight $flight, $language_id, $entry_date, $exit_date, array $occupations, array $form_fields)
    {
        try {
            $this->setResult($this->getSoapClient()->find_pdc($auth, $id_tipo_articulo_clase, $hotel, $flight, $language_id, $entry_date, $exit_date, $occupations, $form_fields));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\FARetvalFindPackageWSDO
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
