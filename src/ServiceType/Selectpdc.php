<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Selectpdc ServiceType
 * @subpackage Services
 */
class Selectpdc extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named select_pdc
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $id_tipo_articulo_clase
     * @param string $notes
     * @param string $reference_agency
     * @param \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data
     * @param \Maseuropa\Booking\StructType\SAParamPaxWSDO[] $paxes
     * @param string $price
     * @param \Maseuropa\Booking\StructType\SAParamThreadsWSDO[] $threads
     * @param string $ip_client
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO|bool
     */
    public function select_pdc(\Maseuropa\Booking\StructType\Auth $auth, $id_tipo_articulo_clase, $notes, $reference_agency, \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data, array $paxes, $price, array $threads, $ip_client)
    {
        try {
            $this->setResult($this->getSoapClient()->select_pdc($auth, $id_tipo_articulo_clase, $notes, $reference_agency, $b2c_data, $paxes, $price, $threads, $ip_client));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
