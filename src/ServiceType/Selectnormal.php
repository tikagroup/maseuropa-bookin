<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Selectnormal ServiceType
 * @subpackage Services
 */
class Selectnormal extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named select_normal
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $result_id
     * @param string $notes
     * @param string $reference_agencyr
     * @param string $locator
     * @param string $warranty_cancellation
     * @param \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data
     * @param \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO[] $occupations
     * @param string $booking_type_id
     * @param string $supplier_notes
     * @param string $ip_client
     * @param string $supplier_id
     * @param string $article_description
     * @param string $id_idioma
     * @param string $referer
     * @param string $customer_notes
     * @param string $agent_mail
     * @param string $min_date
     * @param string $max_date
     * @return \Maseuropa\Booking\StructType\SARetvalSelectNormalWSDO|bool
     */
    public function select_normal(\Maseuropa\Booking\StructType\Auth $auth, $result_id, $notes, $reference_agencyr, $locator, $warranty_cancellation, \Maseuropa\Booking\StructType\SAParamB2CDataWSDO $b2c_data, array $occupations, $booking_type_id, $supplier_notes, $ip_client, $supplier_id, $article_description, $id_idioma, $referer, $customer_notes, $agent_mail, $min_date, $max_date)
    {
        try {
            $this->setResult($this->getSoapClient()->select_normal($auth, $result_id, $notes, $reference_agencyr, $locator, $warranty_cancellation, $b2c_data, $occupations, $booking_type_id, $supplier_notes, $ip_client, $supplier_id, $article_description, $id_idioma, $referer, $customer_notes, $agent_mail, $min_date, $max_date));
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
