<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAShippingAddressWSDO StructType
 * @subpackage Structs
 */
class SAShippingAddressWSDO extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The zip_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip_code;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The zone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $zone;
    /**
     * The iso_country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $iso_country;
    /**
     * Constructor method for SAShippingAddressWSDO
     * @uses SAShippingAddressWSDO::setAddress()
     * @uses SAShippingAddressWSDO::setZip_code()
     * @uses SAShippingAddressWSDO::setCity()
     * @uses SAShippingAddressWSDO::setZone()
     * @uses SAShippingAddressWSDO::setIso_country()
     * @param string $address
     * @param string $zip_code
     * @param string $city
     * @param int $zone
     * @param string $iso_country
     */
    public function __construct($address = null, $zip_code = null, $city = null, $zone = null, $iso_country = null)
    {
        $this
            ->setAddress($address)
            ->setZip_code($zip_code)
            ->setCity($city)
            ->setZone($zone)
            ->setIso_country($iso_country);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Maseuropa\Booking\StructType\SAShippingAddressWSDO
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get zip_code value
     * @return string|null
     */
    public function getZip_code()
    {
        return $this->zip_code;
    }
    /**
     * Set zip_code value
     * @param string $zip_code
     * @return \Maseuropa\Booking\StructType\SAShippingAddressWSDO
     */
    public function setZip_code($zip_code = null)
    {
        // validation for constraint: string
        if (!is_null($zip_code) && !is_string($zip_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zip_code, true), gettype($zip_code)), __LINE__);
        }
        $this->zip_code = $zip_code;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Maseuropa\Booking\StructType\SAShippingAddressWSDO
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get zone value
     * @return int|null
     */
    public function getZone()
    {
        return $this->zone;
    }
    /**
     * Set zone value
     * @param int $zone
     * @return \Maseuropa\Booking\StructType\SAShippingAddressWSDO
     */
    public function setZone($zone = null)
    {
        // validation for constraint: int
        if (!is_null($zone) && !(is_int($zone) || ctype_digit($zone))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($zone, true), gettype($zone)), __LINE__);
        }
        $this->zone = $zone;
        return $this;
    }
    /**
     * Get iso_country value
     * @return string|null
     */
    public function getIso_country()
    {
        return $this->iso_country;
    }
    /**
     * Set iso_country value
     * @param string $iso_country
     * @return \Maseuropa\Booking\StructType\SAShippingAddressWSDO
     */
    public function setIso_country($iso_country = null)
    {
        // validation for constraint: string
        if (!is_null($iso_country) && !is_string($iso_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iso_country, true), gettype($iso_country)), __LINE__);
        }
        $this->iso_country = $iso_country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAShippingAddressWSDO
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
