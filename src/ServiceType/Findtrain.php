<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Findtrain ServiceType
 * @subpackage Services
 */
class Findtrain extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named find_train
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $origin
     * @param string $destiny
     * @param string $date_from
     * @param string $date_to
     * @return struct|bool
     */
    public function find_train(\Maseuropa\Booking\StructType\Auth $auth, $article_class_type_id, $origin, $destiny, $date_from, $date_to)
    {
        try {
            $this->setResult($this->getSoapClient()->find_train($auth, $article_class_type_id, $origin, $destiny, $date_from, $date_to));
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
