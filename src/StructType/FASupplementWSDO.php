<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FASupplementWSDO StructType
 * @subpackage Structs
 */
class FASupplementWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The regimen
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $regimen;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The board_supplement_abbr
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $board_supplement_abbr;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The board_supplement_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $board_supplement_type_id;
    /**
     * Constructor method for FASupplementWSDO
     * @uses FASupplementWSDO::setId()
     * @uses FASupplementWSDO::setRegimen()
     * @uses FASupplementWSDO::setType()
     * @uses FASupplementWSDO::setName()
     * @uses FASupplementWSDO::setBoard_supplement_abbr()
     * @uses FASupplementWSDO::setDescription()
     * @uses FASupplementWSDO::setBoard_supplement_type_id()
     * @param int $id
     * @param string $regimen
     * @param string $type
     * @param string $name
     * @param string $board_supplement_abbr
     * @param string $description
     * @param int $board_supplement_type_id
     */
    public function __construct($id = null, $regimen = null, $type = null, $name = null, $board_supplement_abbr = null, $description = null, $board_supplement_type_id = null)
    {
        $this
            ->setId($id)
            ->setRegimen($regimen)
            ->setType($type)
            ->setName($name)
            ->setBoard_supplement_abbr($board_supplement_abbr)
            ->setDescription($description)
            ->setBoard_supplement_type_id($board_supplement_type_id);
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
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO
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
     * Get regimen value
     * @return string|null
     */
    public function getRegimen()
    {
        return $this->regimen;
    }
    /**
     * Set regimen value
     * @param string $regimen
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO
     */
    public function setRegimen($regimen = null)
    {
        // validation for constraint: string
        if (!is_null($regimen) && !is_string($regimen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regimen, true), gettype($regimen)), __LINE__);
        }
        $this->regimen = $regimen;
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
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO
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
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO
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
     * Get board_supplement_abbr value
     * @return string|null
     */
    public function getBoard_supplement_abbr()
    {
        return $this->board_supplement_abbr;
    }
    /**
     * Set board_supplement_abbr value
     * @param string $board_supplement_abbr
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO
     */
    public function setBoard_supplement_abbr($board_supplement_abbr = null)
    {
        // validation for constraint: string
        if (!is_null($board_supplement_abbr) && !is_string($board_supplement_abbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($board_supplement_abbr, true), gettype($board_supplement_abbr)), __LINE__);
        }
        $this->board_supplement_abbr = $board_supplement_abbr;
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
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO
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
     * Get board_supplement_type_id value
     * @return int|null
     */
    public function getBoard_supplement_type_id()
    {
        return $this->board_supplement_type_id;
    }
    /**
     * Set board_supplement_type_id value
     * @param int $board_supplement_type_id
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO
     */
    public function setBoard_supplement_type_id($board_supplement_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($board_supplement_type_id) && !(is_int($board_supplement_type_id) || ctype_digit($board_supplement_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($board_supplement_type_id, true), gettype($board_supplement_type_id)), __LINE__);
        }
        $this->board_supplement_type_id = $board_supplement_type_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO
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
