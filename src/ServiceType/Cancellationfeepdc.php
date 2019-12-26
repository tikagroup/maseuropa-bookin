<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancellationfeepdc ServiceType
 * @subpackage Services
 */
class Cancellationfeepdc extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancellation_fee_pdc
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $id_tipo_articulo_clase
     * @param \Maseuropa\Booking\StructType\SAParamThreadsWSDO[] $threads
     * @return \Maseuropa\Booking\StructType\SARetvalCancellationFee|bool
     */
    public function cancellation_fee_pdc(\Maseuropa\Booking\StructType\Auth $auth, $id_tipo_articulo_clase, array $threads)
    {
        try {
            $this->setResult($this->getSoapClient()->cancellation_fee_pdc($auth, $id_tipo_articulo_clase, $threads));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\SARetvalCancellationFee
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
