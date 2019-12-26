<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Findtransfers ServiceType
 * @subpackage Services
 */
class Findtransfers extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named find_transfers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $date
     * @param string $article_class_type_id
     * @param \Maseuropa\Booking\StructType\FAParamTransferPlace $origin
     * @param \Maseuropa\Booking\StructType\FAParamTransferPlace $destiny
     * @param string $hour
     * @param \Maseuropa\Booking\StructType\FAParamOccupationWS[] $occupations
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO[]|bool
     */
    public function find_transfers(\Maseuropa\Booking\StructType\Auth $auth, $date, $article_class_type_id, \Maseuropa\Booking\StructType\FAParamTransferPlace $origin, \Maseuropa\Booking\StructType\FAParamTransferPlace $destiny, $hour, array $occupations)
    {
        try {
            $this->setResult($this->getSoapClient()->find_transfers($auth, $date, $article_class_type_id, $origin, $destiny, $hour, $occupations));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO[]
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
