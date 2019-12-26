<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAParamPaxTrain StructType
 * @subpackage Structs
 */
class SAParamPaxTrain extends AbstractStructBase
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
     * The fare_from
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fare_from;
    /**
     * The fare_to
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fare_to;
    /**
     * The card_tempo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $card_tempo;
    /**
     * The card_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $card_number;
    /**
     * Constructor method for SAParamPaxTrain
     * @uses SAParamPaxTrain::setName()
     * @uses SAParamPaxTrain::setSurname()
     * @uses SAParamPaxTrain::setPax_type()
     * @uses SAParamPaxTrain::setEmail()
     * @uses SAParamPaxTrain::setPhone()
     * @uses SAParamPaxTrain::setFare_from()
     * @uses SAParamPaxTrain::setFare_to()
     * @uses SAParamPaxTrain::setCard_tempo()
     * @uses SAParamPaxTrain::setCard_number()
     * @param string $name
     * @param string $surname
     * @param int $pax_type
     * @param string $email
     * @param string $phone
     * @param string $fare_from
     * @param string $fare_to
     * @param string $card_tempo
     * @param string $card_number
     */
    public function __construct($name = null, $surname = null, $pax_type = null, $email = null, $phone = null, $fare_from = null, $fare_to = null, $card_tempo = null, $card_number = null)
    {
        $this
            ->setName($name)
            ->setSurname($surname)
            ->setPax_type($pax_type)
            ->setEmail($email)
            ->setPhone($phone)
            ->setFare_from($fare_from)
            ->setFare_to($fare_to)
            ->setCard_tempo($card_tempo)
            ->setCard_number($card_number);
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
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
     * Get fare_from value
     * @return string|null
     */
    public function getFare_from()
    {
        return $this->fare_from;
    }
    /**
     * Set fare_from value
     * @param string $fare_from
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
     */
    public function setFare_from($fare_from = null)
    {
        // validation for constraint: string
        if (!is_null($fare_from) && !is_string($fare_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fare_from, true), gettype($fare_from)), __LINE__);
        }
        $this->fare_from = $fare_from;
        return $this;
    }
    /**
     * Get fare_to value
     * @return string|null
     */
    public function getFare_to()
    {
        return $this->fare_to;
    }
    /**
     * Set fare_to value
     * @param string $fare_to
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
     */
    public function setFare_to($fare_to = null)
    {
        // validation for constraint: string
        if (!is_null($fare_to) && !is_string($fare_to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fare_to, true), gettype($fare_to)), __LINE__);
        }
        $this->fare_to = $fare_to;
        return $this;
    }
    /**
     * Get card_tempo value
     * @return string|null
     */
    public function getCard_tempo()
    {
        return $this->card_tempo;
    }
    /**
     * Set card_tempo value
     * @param string $card_tempo
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
     */
    public function setCard_tempo($card_tempo = null)
    {
        // validation for constraint: string
        if (!is_null($card_tempo) && !is_string($card_tempo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($card_tempo, true), gettype($card_tempo)), __LINE__);
        }
        $this->card_tempo = $card_tempo;
        return $this;
    }
    /**
     * Get card_number value
     * @return string|null
     */
    public function getCard_number()
    {
        return $this->card_number;
    }
    /**
     * Set card_number value
     * @param string $card_number
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
     */
    public function setCard_number($card_number = null)
    {
        // validation for constraint: string
        if (!is_null($card_number) && !is_string($card_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($card_number, true), gettype($card_number)), __LINE__);
        }
        $this->card_number = $card_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAParamPaxTrain
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
