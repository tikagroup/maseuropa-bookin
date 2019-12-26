<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAParamCabinWS StructType
 * @subpackage Structs
 */
class FAParamCabinWS extends AbstractStructBase
{
    /**
     * The num_occupation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_occupation;
    /**
     * The num_adults
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_adults;
    /**
     * The num_children
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_children;
    /**
     * The age_children
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $age_children;
    /**
     * Constructor method for FAParamCabinWS
     * @uses FAParamCabinWS::setNum_occupation()
     * @uses FAParamCabinWS::setNum_adults()
     * @uses FAParamCabinWS::setNum_children()
     * @uses FAParamCabinWS::setAge_children()
     * @param int $num_occupation
     * @param int $num_adults
     * @param int $num_children
     * @param string $age_children
     */
    public function __construct($num_occupation = null, $num_adults = null, $num_children = null, $age_children = null)
    {
        $this
            ->setNum_occupation($num_occupation)
            ->setNum_adults($num_adults)
            ->setNum_children($num_children)
            ->setAge_children($age_children);
    }
    /**
     * Get num_occupation value
     * @return int|null
     */
    public function getNum_occupation()
    {
        return $this->num_occupation;
    }
    /**
     * Set num_occupation value
     * @param int $num_occupation
     * @return \Maseuropa\Booking\StructType\FAParamCabinWS
     */
    public function setNum_occupation($num_occupation = null)
    {
        // validation for constraint: int
        if (!is_null($num_occupation) && !(is_int($num_occupation) || ctype_digit($num_occupation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_occupation, true), gettype($num_occupation)), __LINE__);
        }
        $this->num_occupation = $num_occupation;
        return $this;
    }
    /**
     * Get num_adults value
     * @return int|null
     */
    public function getNum_adults()
    {
        return $this->num_adults;
    }
    /**
     * Set num_adults value
     * @param int $num_adults
     * @return \Maseuropa\Booking\StructType\FAParamCabinWS
     */
    public function setNum_adults($num_adults = null)
    {
        // validation for constraint: int
        if (!is_null($num_adults) && !(is_int($num_adults) || ctype_digit($num_adults))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_adults, true), gettype($num_adults)), __LINE__);
        }
        $this->num_adults = $num_adults;
        return $this;
    }
    /**
     * Get num_children value
     * @return int|null
     */
    public function getNum_children()
    {
        return $this->num_children;
    }
    /**
     * Set num_children value
     * @param int $num_children
     * @return \Maseuropa\Booking\StructType\FAParamCabinWS
     */
    public function setNum_children($num_children = null)
    {
        // validation for constraint: int
        if (!is_null($num_children) && !(is_int($num_children) || ctype_digit($num_children))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_children, true), gettype($num_children)), __LINE__);
        }
        $this->num_children = $num_children;
        return $this;
    }
    /**
     * Get age_children value
     * @return string|null
     */
    public function getAge_children()
    {
        return $this->age_children;
    }
    /**
     * Set age_children value
     * @param string $age_children
     * @return \Maseuropa\Booking\StructType\FAParamCabinWS
     */
    public function setAge_children($age_children = null)
    {
        // validation for constraint: string
        if (!is_null($age_children) && !is_string($age_children)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($age_children, true), gettype($age_children)), __LINE__);
        }
        $this->age_children = $age_children;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAParamCabinWS
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
