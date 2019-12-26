<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAParamPaxWSDO StructType
 * @subpackage Structs
 */
class SAParamPaxWSDO extends AbstractStructBase
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
     * The doc_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $doc_type;
    /**
     * The doc_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $doc_number;
    /**
     * The birth_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birth_date;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The family_fare_region
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $family_fare_region;
    /**
     * The family_fare_doc_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $family_fare_doc_number;
    /**
     * The sex
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sex;
    /**
     * The pp_nationality_country_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pp_nationality_country_code;
    /**
     * The pp_expedition_country_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pp_expedition_country_code;
    /**
     * The pp_expiration_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pp_expiration_date;
    /**
     * The extras
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Array
     */
    public $extras;
    /**
     * The issuing_frequent_flyer_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $issuing_frequent_flyer_id;
    /**
     * The frequent_flyer_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $frequent_flyer_number;
    /**
     * Constructor method for SAParamPaxWSDO
     * @uses SAParamPaxWSDO::setName()
     * @uses SAParamPaxWSDO::setSurname()
     * @uses SAParamPaxWSDO::setPax_type()
     * @uses SAParamPaxWSDO::setDoc_type()
     * @uses SAParamPaxWSDO::setDoc_number()
     * @uses SAParamPaxWSDO::setBirth_date()
     * @uses SAParamPaxWSDO::setPhone()
     * @uses SAParamPaxWSDO::setEmail()
     * @uses SAParamPaxWSDO::setCity()
     * @uses SAParamPaxWSDO::setFamily_fare_region()
     * @uses SAParamPaxWSDO::setFamily_fare_doc_number()
     * @uses SAParamPaxWSDO::setSex()
     * @uses SAParamPaxWSDO::setPp_nationality_country_code()
     * @uses SAParamPaxWSDO::setPp_expedition_country_code()
     * @uses SAParamPaxWSDO::setPp_expiration_date()
     * @uses SAParamPaxWSDO::setExtras()
     * @uses SAParamPaxWSDO::setIssuing_frequent_flyer_id()
     * @uses SAParamPaxWSDO::setFrequent_flyer_number()
     * @param string $name
     * @param string $surname
     * @param int $pax_type
     * @param string $doc_type
     * @param string $doc_number
     * @param string $birth_date
     * @param string $phone
     * @param string $email
     * @param string $city
     * @param string $family_fare_region
     * @param string $family_fare_doc_number
     * @param string $sex
     * @param string $pp_nationality_country_code
     * @param string $pp_expedition_country_code
     * @param string $pp_expiration_date
     * @param Array $extras
     * @param int $issuing_frequent_flyer_id
     * @param string $frequent_flyer_number
     */
    public function __construct($name = null, $surname = null, $pax_type = null, $doc_type = null, $doc_number = null, $birth_date = null, $phone = null, $email = null, $city = null, $family_fare_region = null, $family_fare_doc_number = null, $sex = null, $pp_nationality_country_code = null, $pp_expedition_country_code = null, $pp_expiration_date = null, Array $extras = null, $issuing_frequent_flyer_id = null, $frequent_flyer_number = null)
    {
        $this
            ->setName($name)
            ->setSurname($surname)
            ->setPax_type($pax_type)
            ->setDoc_type($doc_type)
            ->setDoc_number($doc_number)
            ->setBirth_date($birth_date)
            ->setPhone($phone)
            ->setEmail($email)
            ->setCity($city)
            ->setFamily_fare_region($family_fare_region)
            ->setFamily_fare_doc_number($family_fare_doc_number)
            ->setSex($sex)
            ->setPp_nationality_country_code($pp_nationality_country_code)
            ->setPp_expedition_country_code($pp_expedition_country_code)
            ->setPp_expiration_date($pp_expiration_date)
            ->setExtras($extras)
            ->setIssuing_frequent_flyer_id($issuing_frequent_flyer_id)
            ->setFrequent_flyer_number($frequent_flyer_number);
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
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
     * Get doc_type value
     * @return string|null
     */
    public function getDoc_type()
    {
        return $this->doc_type;
    }
    /**
     * Set doc_type value
     * @param string $doc_type
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setDoc_type($doc_type = null)
    {
        // validation for constraint: string
        if (!is_null($doc_type) && !is_string($doc_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($doc_type, true), gettype($doc_type)), __LINE__);
        }
        $this->doc_type = $doc_type;
        return $this;
    }
    /**
     * Get doc_number value
     * @return string|null
     */
    public function getDoc_number()
    {
        return $this->doc_number;
    }
    /**
     * Set doc_number value
     * @param string $doc_number
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setDoc_number($doc_number = null)
    {
        // validation for constraint: string
        if (!is_null($doc_number) && !is_string($doc_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($doc_number, true), gettype($doc_number)), __LINE__);
        }
        $this->doc_number = $doc_number;
        return $this;
    }
    /**
     * Get birth_date value
     * @return string|null
     */
    public function getBirth_date()
    {
        return $this->birth_date;
    }
    /**
     * Set birth_date value
     * @param string $birth_date
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setBirth_date($birth_date = null)
    {
        // validation for constraint: string
        if (!is_null($birth_date) && !is_string($birth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birth_date, true), gettype($birth_date)), __LINE__);
        }
        $this->birth_date = $birth_date;
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
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
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get family_fare_region value
     * @return string|null
     */
    public function getFamily_fare_region()
    {
        return $this->family_fare_region;
    }
    /**
     * Set family_fare_region value
     * @param string $family_fare_region
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setFamily_fare_region($family_fare_region = null)
    {
        // validation for constraint: string
        if (!is_null($family_fare_region) && !is_string($family_fare_region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($family_fare_region, true), gettype($family_fare_region)), __LINE__);
        }
        $this->family_fare_region = $family_fare_region;
        return $this;
    }
    /**
     * Get family_fare_doc_number value
     * @return string|null
     */
    public function getFamily_fare_doc_number()
    {
        return $this->family_fare_doc_number;
    }
    /**
     * Set family_fare_doc_number value
     * @param string $family_fare_doc_number
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setFamily_fare_doc_number($family_fare_doc_number = null)
    {
        // validation for constraint: string
        if (!is_null($family_fare_doc_number) && !is_string($family_fare_doc_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($family_fare_doc_number, true), gettype($family_fare_doc_number)), __LINE__);
        }
        $this->family_fare_doc_number = $family_fare_doc_number;
        return $this;
    }
    /**
     * Get sex value
     * @return string|null
     */
    public function getSex()
    {
        return $this->sex;
    }
    /**
     * Set sex value
     * @param string $sex
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setSex($sex = null)
    {
        // validation for constraint: string
        if (!is_null($sex) && !is_string($sex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sex, true), gettype($sex)), __LINE__);
        }
        $this->sex = $sex;
        return $this;
    }
    /**
     * Get pp_nationality_country_code value
     * @return string|null
     */
    public function getPp_nationality_country_code()
    {
        return $this->pp_nationality_country_code;
    }
    /**
     * Set pp_nationality_country_code value
     * @param string $pp_nationality_country_code
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setPp_nationality_country_code($pp_nationality_country_code = null)
    {
        // validation for constraint: string
        if (!is_null($pp_nationality_country_code) && !is_string($pp_nationality_country_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pp_nationality_country_code, true), gettype($pp_nationality_country_code)), __LINE__);
        }
        $this->pp_nationality_country_code = $pp_nationality_country_code;
        return $this;
    }
    /**
     * Get pp_expedition_country_code value
     * @return string|null
     */
    public function getPp_expedition_country_code()
    {
        return $this->pp_expedition_country_code;
    }
    /**
     * Set pp_expedition_country_code value
     * @param string $pp_expedition_country_code
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setPp_expedition_country_code($pp_expedition_country_code = null)
    {
        // validation for constraint: string
        if (!is_null($pp_expedition_country_code) && !is_string($pp_expedition_country_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pp_expedition_country_code, true), gettype($pp_expedition_country_code)), __LINE__);
        }
        $this->pp_expedition_country_code = $pp_expedition_country_code;
        return $this;
    }
    /**
     * Get pp_expiration_date value
     * @return string|null
     */
    public function getPp_expiration_date()
    {
        return $this->pp_expiration_date;
    }
    /**
     * Set pp_expiration_date value
     * @param string $pp_expiration_date
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setPp_expiration_date($pp_expiration_date = null)
    {
        // validation for constraint: string
        if (!is_null($pp_expiration_date) && !is_string($pp_expiration_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pp_expiration_date, true), gettype($pp_expiration_date)), __LINE__);
        }
        $this->pp_expiration_date = $pp_expiration_date;
        return $this;
    }
    /**
     * Get extras value
     * @return Array|null
     */
    public function getExtras()
    {
        return $this->extras;
    }
    /**
     * Set extras value
     * @param Array $extras
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setExtras(Array $extras = null)
    {
        $this->extras = $extras;
        return $this;
    }
    /**
     * Get issuing_frequent_flyer_id value
     * @return int|null
     */
    public function getIssuing_frequent_flyer_id()
    {
        return $this->issuing_frequent_flyer_id;
    }
    /**
     * Set issuing_frequent_flyer_id value
     * @param int $issuing_frequent_flyer_id
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setIssuing_frequent_flyer_id($issuing_frequent_flyer_id = null)
    {
        // validation for constraint: int
        if (!is_null($issuing_frequent_flyer_id) && !(is_int($issuing_frequent_flyer_id) || ctype_digit($issuing_frequent_flyer_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($issuing_frequent_flyer_id, true), gettype($issuing_frequent_flyer_id)), __LINE__);
        }
        $this->issuing_frequent_flyer_id = $issuing_frequent_flyer_id;
        return $this;
    }
    /**
     * Get frequent_flyer_number value
     * @return string|null
     */
    public function getFrequent_flyer_number()
    {
        return $this->frequent_flyer_number;
    }
    /**
     * Set frequent_flyer_number value
     * @param string $frequent_flyer_number
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
     */
    public function setFrequent_flyer_number($frequent_flyer_number = null)
    {
        // validation for constraint: string
        if (!is_null($frequent_flyer_number) && !is_string($frequent_flyer_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequent_flyer_number, true), gettype($frequent_flyer_number)), __LINE__);
        }
        $this->frequent_flyer_number = $frequent_flyer_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO
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
