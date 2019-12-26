<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAParamThreadsWSDO StructType
 * @subpackage Structs
 */
class SAParamThreadsWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The key_result
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $key_result;
    /**
     * Constructor method for SAParamThreadsWSDO
     * @uses SAParamThreadsWSDO::setId()
     * @uses SAParamThreadsWSDO::setKey_result()
     * @param int $id
     * @param string $key_result
     */
    public function __construct($id = null, $key_result = null)
    {
        $this
            ->setId($id)
            ->setKey_result($key_result);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Maseuropa\Booking\StructType\SAParamThreadsWSDO
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get key_result value
     * @return string|null
     */
    public function getKey_result()
    {
        return $this->key_result;
    }
    /**
     * Set key_result value
     * @param string $key_result
     * @return \Maseuropa\Booking\StructType\SAParamThreadsWSDO
     */
    public function setKey_result($key_result = null)
    {
        // validation for constraint: string
        if (!is_null($key_result) && !is_string($key_result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key_result, true), gettype($key_result)), __LINE__);
        }
        $this->key_result = $key_result;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAParamThreadsWSDO
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
