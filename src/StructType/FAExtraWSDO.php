<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAExtraWSDO StructType
 * @subpackage Structs
 */
class FAExtraWSDO extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $price;
    /**
     * The rate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rate;
    /**
     * Constructor method for FAExtraWSDO
     * @uses FAExtraWSDO::setName()
     * @uses FAExtraWSDO::setPrice()
     * @uses FAExtraWSDO::setRate()
     * @param string $name
     * @param string $price
     * @param string $rate
     */
    public function __construct($name = null, $price = null, $rate = null)
    {
        $this
            ->setName($name)
            ->setPrice($price)
            ->setRate($rate);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Maseuropa\Booking\StructType\FAExtraWSDO
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get price value
     * @return string|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param string $price
     * @return \Maseuropa\Booking\StructType\FAExtraWSDO
     */
    public function setPrice($price = null)
    {
        // validation for constraint: string
        if (!is_null($price) && !is_string($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
    }
    /**
     * Get rate value
     * @return string|null
     */
    public function getRate()
    {
        return $this->rate;
    }
    /**
     * Set rate value
     * @param string $rate
     * @return \Maseuropa\Booking\StructType\FAExtraWSDO
     */
    public function setRate($rate = null)
    {
        // validation for constraint: string
        if (!is_null($rate) && !is_string($rate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rate, true), gettype($rate)), __LINE__);
        }
        $this->rate = $rate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAExtraWSDO
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
