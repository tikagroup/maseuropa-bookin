<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAParamPaxRentacar StructType
 * @subpackage Structs
 */
class SAParamPaxRentacar extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The surname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $surname;
    /**
     * The pax_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pax_type;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * Constructor method for SAParamPaxRentacar
     * @uses SAParamPaxRentacar::setName()
     * @uses SAParamPaxRentacar::setSurname()
     * @uses SAParamPaxRentacar::setPax_type()
     * @uses SAParamPaxRentacar::setEmail()
     * @uses SAParamPaxRentacar::setPhone()
     * @param string $name
     * @param string $surname
     * @param int $pax_type
     * @param string $email
     * @param string $phone
     */
    public function __construct($name = null, $surname = null, $pax_type = null, $email = null, $phone = null)
    {
        $this
            ->setName($name)
            ->setSurname($surname)
            ->setPax_type($pax_type)
            ->setEmail($email)
            ->setPhone($phone);
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxRentacar
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
     * Get surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Maseuropa\Booking\StructType\SAParamPaxRentacar
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        return $this;
    }
    /**
     * Get pax_type value
     * @return int|null
     */
    public function getPax_type()
    {
        return $this->pax_type;
    }
    /**
     * Set pax_type value
     * @param int $pax_type
     * @return \Maseuropa\Booking\StructType\SAParamPaxRentacar
     */
    public function setPax_type($pax_type = null)
    {
        // validation for constraint: int
        if (!is_null($pax_type) && !(is_int($pax_type) || ctype_digit($pax_type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pax_type, true), gettype($pax_type)), __LINE__);
        }
        $this->pax_type = $pax_type;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Maseuropa\Booking\StructType\SAParamPaxRentacar
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Maseuropa\Booking\StructType\SAParamPaxRentacar
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAParamPaxRentacar
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
