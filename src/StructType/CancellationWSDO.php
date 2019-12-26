<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancellationWSDO StructType
 * @subpackage Structs
 */
class CancellationWSDO extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $result;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $status;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $price;
    /**
     * The booking_info
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Maseuropa\Booking\StructType\BD_VoucherWSDO
     */
    public $booking_info;
    /**
     * Constructor method for CancellationWSDO
     * @uses CancellationWSDO::setResult()
     * @uses CancellationWSDO::setStatus()
     * @uses CancellationWSDO::setPrice()
     * @uses CancellationWSDO::setBooking_info()
     * @param string $result
     * @param int $status
     * @param string $price
     * @param \Maseuropa\Booking\StructType\BD_VoucherWSDO $booking_info
     */
    public function __construct($result = null, $status = null, $price = null, \Maseuropa\Booking\StructType\BD_VoucherWSDO $booking_info = null)
    {
        $this
            ->setResult($result)
            ->setStatus($status)
            ->setPrice($price)
            ->setBooking_info($booking_info);
    }
    /**
     * Get result value
     * @return string|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param string $result
     * @return \Maseuropa\Booking\StructType\CancellationWSDO
     */
    public function setResult($result = null)
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Maseuropa\Booking\StructType\CancellationWSDO
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
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
     * @return \Maseuropa\Booking\StructType\CancellationWSDO
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
     * Get booking_info value
     * @return \Maseuropa\Booking\StructType\BD_VoucherWSDO|null
     */
    public function getBooking_info()
    {
        return $this->booking_info;
    }
    /**
     * Set booking_info value
     * @param \Maseuropa\Booking\StructType\BD_VoucherWSDO $booking_info
     * @return \Maseuropa\Booking\StructType\CancellationWSDO
     */
    public function setBooking_info(\Maseuropa\Booking\StructType\BD_VoucherWSDO $booking_info = null)
    {
        $this->booking_info = $booking_info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\CancellationWSDO
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
