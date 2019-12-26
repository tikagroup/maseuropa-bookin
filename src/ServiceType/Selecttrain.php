<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Selecttrain ServiceType
 * @subpackage Services
 */
class Selecttrain extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named select_train
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data
     * @param string $search_id
     * @param string $result_from_id
     * @param string $result_to_id
     * @param \Maseuropa\Booking\StructType\SAParamPaxTrain[] $paxes
     * @param string $price
     * @param string $notes
     * @return struct|bool
     */
    public function select_train(\Maseuropa\Booking\StructType\Auth $auth, \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data, $search_id, $result_from_id, $result_to_id, array $paxes, $price, $notes)
    {
        try {
            $this->setResult($this->getSoapClient()->select_train($auth, $b2c_data, $search_id, $result_from_id, $result_to_id, $paxes, $price, $notes));
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
