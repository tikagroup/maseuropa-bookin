<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAParamTransferPlace StructType
 * @subpackage Structs
 */
class FAParamTransferPlace extends AbstractStructBase
{
    /**
     * The transfer_place_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $transfer_place_id;
    /**
     * The airport_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $airport_code;
    /**
     * Constructor method for FAParamTransferPlace
     * @uses FAParamTransferPlace::setTransfer_place_id()
     * @uses FAParamTransferPlace::setAirport_code()
     * @param int $transfer_place_id
     * @param string $airport_code
     */
    public function __construct($transfer_place_id = null, $airport_code = null)
    {
        $this
            ->setTransfer_place_id($transfer_place_id)
            ->setAirport_code($airport_code);
    }
    /**
     * Get transfer_place_id value
     * @return int|null
     */
    public function getTransfer_place_id()
    {
        return $this->transfer_place_id;
    }
    /**
     * Set transfer_place_id value
     * @param int $transfer_place_id
     * @return \Maseuropa\Booking\StructType\FAParamTransferPlace
     */
    public function setTransfer_place_id($transfer_place_id = null)
    {
        // validation for constraint: int
        if (!is_null($transfer_place_id) && !(is_int($transfer_place_id) || ctype_digit($transfer_place_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transfer_place_id, true), gettype($transfer_place_id)), __LINE__);
        }
        $this->transfer_place_id = $transfer_place_id;
        return $this;
    }
    /**
     * Get airport_code value
     * @return string|null
     */
    public function getAirport_code()
    {
        return $this->airport_code;
    }
    /**
     * Set airport_code value
     * @param string $airport_code
     * @return \Maseuropa\Booking\StructType\FAParamTransferPlace
     */
    public function setAirport_code($airport_code = null)
    {
        // validation for constraint: string
        if (!is_null($airport_code) && !is_string($airport_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airport_code, true), gettype($airport_code)), __LINE__);
        }
        $this->airport_code = $airport_code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAParamTransferPlace
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
