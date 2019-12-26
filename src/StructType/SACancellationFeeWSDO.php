<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SACancellationFeeWSDO StructType
 * @subpackage Structs
 */
class SACancellationFeeWSDO extends AbstractStructBase
{
    /**
     * The days_notice
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $days_notice;
    /**
     * The nights
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $nights;
    /**
     * The expresado_en
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $expresado_en;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $amount;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * Constructor method for SACancellationFeeWSDO
     * @uses SACancellationFeeWSDO::setDays_notice()
     * @uses SACancellationFeeWSDO::setNights()
     * @uses SACancellationFeeWSDO::setExpresado_en()
     * @uses SACancellationFeeWSDO::setAmount()
     * @uses SACancellationFeeWSDO::setDescription()
     * @param string $days_notice
     * @param int $nights
     * @param string $expresado_en
     * @param string $amount
     * @param string $description
     */
    public function __construct($days_notice = null, $nights = null, $expresado_en = null, $amount = null, $description = null)
    {
        $this
            ->setDays_notice($days_notice)
            ->setNights($nights)
            ->setExpresado_en($expresado_en)
            ->setAmount($amount)
            ->setDescription($description);
    }
    /**
     * Get days_notice value
     * @return string|null
     */
    public function getDays_notice()
    {
        return $this->days_notice;
    }
    /**
     * Set days_notice value
     * @param string $days_notice
     * @return \Maseuropa\Booking\StructType\SACancellationFeeWSDO
     */
    public function setDays_notice($days_notice = null)
    {
        // validation for constraint: string
        if (!is_null($days_notice) && !is_string($days_notice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($days_notice, true), gettype($days_notice)), __LINE__);
        }
        $this->days_notice = $days_notice;
        return $this;
    }
    /**
     * Get nights value
     * @return int|null
     */
    public function getNights()
    {
        return $this->nights;
    }
    /**
     * Set nights value
     * @param int $nights
     * @return \Maseuropa\Booking\StructType\SACancellationFeeWSDO
     */
    public function setNights($nights = null)
    {
        // validation for constraint: int
        if (!is_null($nights) && !(is_int($nights) || ctype_digit($nights))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nights, true), gettype($nights)), __LINE__);
        }
        $this->nights = $nights;
        return $this;
    }
    /**
     * Get expresado_en value
     * @return string|null
     */
    public function getExpresado_en()
    {
        return $this->expresado_en;
    }
    /**
     * Set expresado_en value
     * @param string $expresado_en
     * @return \Maseuropa\Booking\StructType\SACancellationFeeWSDO
     */
    public function setExpresado_en($expresado_en = null)
    {
        // validation for constraint: string
        if (!is_null($expresado_en) && !is_string($expresado_en)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expresado_en, true), gettype($expresado_en)), __LINE__);
        }
        $this->expresado_en = $expresado_en;
        return $this;
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Maseuropa\Booking\StructType\SACancellationFeeWSDO
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Maseuropa\Booking\StructType\SACancellationFeeWSDO
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SACancellationFeeWSDO
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
