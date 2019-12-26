<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Selectrentacar ServiceType
 * @subpackage Services
 */
class Selectrentacar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named select_rentacar
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data
     * @param string $reference_agency
     * @param string $locator
     * @param string $article_class_type_id
     * @param string $article_id
     * @param string $origin
     * @param string $origin_date
     * @param string $origin_hour
     * @param string $origin_supplier_id
     * @param string $destiny
     * @param string $destiny_date
     * @param string $destiny_hour
     * @param string $destiny_supplier_id
     * @param \Maseuropa\Booking\StructType\SAParamPaxRentacar[] $paxes
     * @param \Maseuropa\Booking\StructType\SAParamSupplement[] $supplements
     * @param string $price
     * @param string $notes
     * @return struct|bool
     */
    public function select_rentacar(\Maseuropa\Booking\StructType\Auth $auth, \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data, $reference_agency, $locator, $article_class_type_id, $article_id, $origin, $origin_date, $origin_hour, $origin_supplier_id, $destiny, $destiny_date, $destiny_hour, $destiny_supplier_id, array $paxes, array $supplements, $price, $notes)
    {
        try {
            $this->setResult($this->getSoapClient()->select_rentacar($auth, $b2c_data, $reference_agency, $locator, $article_class_type_id, $article_id, $origin, $origin_date, $origin_hour, $origin_supplier_id, $destiny, $destiny_date, $destiny_hour, $destiny_supplier_id, $paxes, $supplements, $price, $notes));
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
