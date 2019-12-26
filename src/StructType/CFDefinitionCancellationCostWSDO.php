<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CFDefinitionCancellationCostWSDO StructType
 * @subpackage Structs
 */
class CFDefinitionCancellationCostWSDO extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The days_notice
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $days_notice;
    /**
     * The nights_apply
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nights_apply;
    /**
     * The expressed_in
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $expressed_in;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $amount;
    /**
     * Constructor method for CFDefinitionCancellationCostWSDO
     * @uses CFDefinitionCancellationCostWSDO::setDescription()
     * @uses CFDefinitionCancellationCostWSDO::setDays_notice()
     * @uses CFDefinitionCancellationCostWSDO::setNights_apply()
     * @uses CFDefinitionCancellationCostWSDO::setExpressed_in()
     * @uses CFDefinitionCancellationCostWSDO::setAmount()
     * @param string $description
     * @param string $days_notice
     * @param string $nights_apply
     * @param string $expressed_in
     * @param string $amount
     */
    public function __construct($description = null, $days_notice = null, $nights_apply = null, $expressed_in = null, $amount = null)
    {
        $this
            ->setDescription($description)
            ->setDays_notice($days_notice)
            ->setNights_apply($nights_apply)
            ->setExpressed_in($expressed_in)
            ->setAmount($amount);
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
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO
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
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO
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
     * Get nights_apply value
     * @return string|null
     */
    public function getNights_apply()
    {
        return $this->nights_apply;
    }
    /**
     * Set nights_apply value
     * @param string $nights_apply
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO
     */
    public function setNights_apply($nights_apply = null)
    {
        // validation for constraint: string
        if (!is_null($nights_apply) && !is_string($nights_apply)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nights_apply, true), gettype($nights_apply)), __LINE__);
        }
        $this->nights_apply = $nights_apply;
        return $this;
    }
    /**
     * Get expressed_in value
     * @return string|null
     */
    public function getExpressed_in()
    {
        return $this->expressed_in;
    }
    /**
     * Set expressed_in value
     * @param string $expressed_in
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO
     */
    public function setExpressed_in($expressed_in = null)
    {
        // validation for constraint: string
        if (!is_null($expressed_in) && !is_string($expressed_in)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expressed_in, true), gettype($expressed_in)), __LINE__);
        }
        $this->expressed_in = $expressed_in;
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
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO
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
