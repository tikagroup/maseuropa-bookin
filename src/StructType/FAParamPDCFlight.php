<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAParamPDCFlight StructType
 * @subpackage Structs
 */
class FAParamPDCFlight extends AbstractStructBase
{
    /**
     * The low_xml
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $low_xml;
    /**
     * The direct_flights
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $direct_flights;
    /**
     * The cabin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cabin;
    /**
     * The resident
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $resident;
    /**
     * The family_fare
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $family_fare;
    /**
     * Constructor method for FAParamPDCFlight
     * @uses FAParamPDCFlight::setLow_xml()
     * @uses FAParamPDCFlight::setDirect_flights()
     * @uses FAParamPDCFlight::setCabin()
     * @uses FAParamPDCFlight::setResident()
     * @uses FAParamPDCFlight::setFamily_fare()
     * @param int $low_xml
     * @param int $direct_flights
     * @param string $cabin
     * @param string $resident
     * @param string $family_fare
     */
    public function __construct($low_xml = null, $direct_flights = null, $cabin = null, $resident = null, $family_fare = null)
    {
        $this
            ->setLow_xml($low_xml)
            ->setDirect_flights($direct_flights)
            ->setCabin($cabin)
            ->setResident($resident)
            ->setFamily_fare($family_fare);
    }
    /**
     * Get low_xml value
     * @return int|null
     */
    public function getLow_xml()
    {
        return $this->low_xml;
    }
    /**
     * Set low_xml value
     * @param int $low_xml
     * @return \Maseuropa\Booking\StructType\FAParamPDCFlight
     */
    public function setLow_xml($low_xml = null)
    {
        // validation for constraint: int
        if (!is_null($low_xml) && !(is_int($low_xml) || ctype_digit($low_xml))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($low_xml, true), gettype($low_xml)), __LINE__);
        }
        $this->low_xml = $low_xml;
        return $this;
    }
    /**
     * Get direct_flights value
     * @return int|null
     */
    public function getDirect_flights()
    {
        return $this->direct_flights;
    }
    /**
     * Set direct_flights value
     * @param int $direct_flights
     * @return \Maseuropa\Booking\StructType\FAParamPDCFlight
     */
    public function setDirect_flights($direct_flights = null)
    {
        // validation for constraint: int
        if (!is_null($direct_flights) && !(is_int($direct_flights) || ctype_digit($direct_flights))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($direct_flights, true), gettype($direct_flights)), __LINE__);
        }
        $this->direct_flights = $direct_flights;
        return $this;
    }
    /**
     * Get cabin value
     * @return string|null
     */
    public function getCabin()
    {
        return $this->cabin;
    }
    /**
     * Set cabin value
     * @param string $cabin
     * @return \Maseuropa\Booking\StructType\FAParamPDCFlight
     */
    public function setCabin($cabin = null)
    {
        // validation for constraint: string
        if (!is_null($cabin) && !is_string($cabin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabin, true), gettype($cabin)), __LINE__);
        }
        $this->cabin = $cabin;
        return $this;
    }
    /**
     * Get resident value
     * @return string|null
     */
    public function getResident()
    {
        return $this->resident;
    }
    /**
     * Set resident value
     * @param string $resident
     * @return \Maseuropa\Booking\StructType\FAParamPDCFlight
     */
    public function setResident($resident = null)
    {
        // validation for constraint: string
        if (!is_null($resident) && !is_string($resident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resident, true), gettype($resident)), __LINE__);
        }
        $this->resident = $resident;
        return $this;
    }
    /**
     * Get family_fare value
     * @return string|null
     */
    public function getFamily_fare()
    {
        return $this->family_fare;
    }
    /**
     * Set family_fare value
     * @param string $family_fare
     * @return \Maseuropa\Booking\StructType\FAParamPDCFlight
     */
    public function setFamily_fare($family_fare = null)
    {
        // validation for constraint: string
        if (!is_null($family_fare) && !is_string($family_fare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($family_fare, true), gettype($family_fare)), __LINE__);
        }
        $this->family_fare = $family_fare;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAParamPDCFlight
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
