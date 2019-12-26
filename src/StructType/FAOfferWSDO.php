<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAOfferWSDO StructType
 * @subpackage Structs
 */
class FAOfferWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $type_id;
    /**
     * The class
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $class;
    /**
     * The class_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $class_id;
    /**
     * Constructor method for FAOfferWSDO
     * @uses FAOfferWSDO::setId()
     * @uses FAOfferWSDO::setName()
     * @uses FAOfferWSDO::setDescription()
     * @uses FAOfferWSDO::setType()
     * @uses FAOfferWSDO::setType_id()
     * @uses FAOfferWSDO::setClass()
     * @uses FAOfferWSDO::setClass_id()
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $type
     * @param int $type_id
     * @param string $class
     * @param int $class_id
     */
    public function __construct($id = null, $name = null, $description = null, $type = null, $type_id = null, $class = null, $class_id = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setDescription($description)
            ->setType($type)
            ->setType_id($type_id)
            ->setClass($class)
            ->setClass_id($class_id);
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
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO
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
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO
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
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get type_id value
     * @return int|null
     */
    public function getType_id()
    {
        return $this->type_id;
    }
    /**
     * Set type_id value
     * @param int $type_id
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO
     */
    public function setType_id($type_id = null)
    {
        // validation for constraint: int
        if (!is_null($type_id) && !(is_int($type_id) || ctype_digit($type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type_id, true), gettype($type_id)), __LINE__);
        }
        $this->type_id = $type_id;
        return $this;
    }
    /**
     * Get class value
     * @return string|null
     */
    public function getClass()
    {
        return $this->class;
    }
    /**
     * Set class value
     * @param string $class
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO
     */
    public function setClass($class = null)
    {
        // validation for constraint: string
        if (!is_null($class) && !is_string($class)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($class, true), gettype($class)), __LINE__);
        }
        $this->class = $class;
        return $this;
    }
    /**
     * Get class_id value
     * @return int|null
     */
    public function getClass_id()
    {
        return $this->class_id;
    }
    /**
     * Set class_id value
     * @param int $class_id
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO
     */
    public function setClass_id($class_id = null)
    {
        // validation for constraint: int
        if (!is_null($class_id) && !(is_int($class_id) || ctype_digit($class_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($class_id, true), gettype($class_id)), __LINE__);
        }
        $this->class_id = $class_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO
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
