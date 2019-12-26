<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaresPax StructType
 * @subpackage Structs
 */
class FaresPax extends AbstractStructBase
{
    /**
     * The fare_from
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fare_from;
    /**
     * The fare_to
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fare_to;
    /**
     * Constructor method for FaresPax
     * @uses FaresPax::setFare_from()
     * @uses FaresPax::setFare_to()
     * @param string $fare_from
     * @param string $fare_to
     */
    public function __construct($fare_from = null, $fare_to = null)
    {
        $this
            ->setFare_from($fare_from)
            ->setFare_to($fare_to);
    }
    /**
     * Get fare_from value
     * @return string|null
     */
    public function getFare_from()
    {
        return $this->fare_from;
    }
    /**
     * Set fare_from value
     * @param string $fare_from
     * @return \Maseuropa\Booking\StructType\FaresPax
     */
    public function setFare_from($fare_from = null)
    {
        // validation for constraint: string
        if (!is_null($fare_from) && !is_string($fare_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fare_from, true), gettype($fare_from)), __LINE__);
        }
        $this->fare_from = $fare_from;
        return $this;
    }
    /**
     * Get fare_to value
     * @return string|null
     */
    public function getFare_to()
    {
        return $this->fare_to;
    }
    /**
     * Set fare_to value
     * @param string $fare_to
     * @return \Maseuropa\Booking\StructType\FaresPax
     */
    public function setFare_to($fare_to = null)
    {
        // validation for constraint: string
        if (!is_null($fare_to) && !is_string($fare_to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fare_to, true), gettype($fare_to)), __LINE__);
        }
        $this->fare_to = $fare_to;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FaresPax
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
