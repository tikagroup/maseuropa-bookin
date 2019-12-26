<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAParamFormFields StructType
 * @subpackage Structs
 */
class FAParamFormFields extends AbstractStructBase
{
    /**
     * The field_tag
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $field_tag;
    /**
     * The field_value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $field_value;
    /**
     * Constructor method for FAParamFormFields
     * @uses FAParamFormFields::setField_tag()
     * @uses FAParamFormFields::setField_value()
     * @param string $field_tag
     * @param string $field_value
     */
    public function __construct($field_tag = null, $field_value = null)
    {
        $this
            ->setField_tag($field_tag)
            ->setField_value($field_value);
    }
    /**
     * Get field_tag value
     * @return string|null
     */
    public function getField_tag()
    {
        return $this->field_tag;
    }
    /**
     * Set field_tag value
     * @param string $field_tag
     * @return \Maseuropa\Booking\StructType\FAParamFormFields
     */
    public function setField_tag($field_tag = null)
    {
        // validation for constraint: string
        if (!is_null($field_tag) && !is_string($field_tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field_tag, true), gettype($field_tag)), __LINE__);
        }
        $this->field_tag = $field_tag;
        return $this;
    }
    /**
     * Get field_value value
     * @return string|null
     */
    public function getField_value()
    {
        return $this->field_value;
    }
    /**
     * Set field_value value
     * @param string $field_value
     * @return \Maseuropa\Booking\StructType\FAParamFormFields
     */
    public function setField_value($field_value = null)
    {
        // validation for constraint: string
        if (!is_null($field_value) && !is_string($field_value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field_value, true), gettype($field_value)), __LINE__);
        }
        $this->field_value = $field_value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAParamFormFields
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
