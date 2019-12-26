<?php

namespace Maseuropa\Booking\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Findflights ServiceType
 * @subpackage Services
 */
class Findflights extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named find_flights
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\Booking\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $type_flight
     * @param string $origin_flight
     * @param string $destiny_flight
     * @param string $departure_date
     * @param string $return_date
     * @param string $flexible
     * @param string $low_xml
     * @param string $direct_flights
     * @param string $cabin
     * @param string $num_adults
     * @param string $num_children
     * @param string $age_children
     * @param string $num_babies
     * @param string $resident
     * @param string $family_fare
     * @param string $show_calendar
     * @return \Maseuropa\Booking\StructType\FARetvalFindFlightWSDO[]|bool
     */
    public function find_flights(\Maseuropa\Booking\StructType\Auth $auth, $article_class_type_id, $type_flight, $origin_flight, $destiny_flight, $departure_date, $return_date, $flexible, $low_xml, $direct_flights, $cabin, $num_adults, $num_children, $age_children, $num_babies, $resident, $family_fare, $show_calendar)
    {
        try {
            $this->setResult($this->getSoapClient()->find_flights($auth, $article_class_type_id, $type_flight, $origin_flight, $destiny_flight, $departure_date, $return_date, $flexible, $low_xml, $direct_flights, $cabin, $num_adults, $num_children, $age_children, $num_babies, $resident, $family_fare, $show_calendar));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\Booking\StructType\FARetvalFindFlightWSDO[]
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
