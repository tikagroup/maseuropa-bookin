<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Selectboat ServiceType
 * @subpackage Services
 */
class Selectboat extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named select_boat
     * Meta information extracted from the WSDL
     * - documentation: @param Auth $auth
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
     * @param string $key_results
     * @param string $ip_client
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO|bool
     */
    public function select_boat(\Maseuropa\Booking\StructType\Auth $auth, $id_tipo_articulo_clase, $notes, $reference_agency, \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data, array $paxes, $price, $key_results, $ip_client)
    {
        try {
            $this->setResult($this->getSoapClient()->select_boat($auth, $id_tipo_articulo_clase, $notes, $reference_agency, $b2c_data, $paxes, $price, $key_results, $ip_client));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
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
