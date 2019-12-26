<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAParamB2CDataWSDO StructType
 * @subpackage Structs
 */
class SAParamB2CDataWSDO extends AbstractStructBase
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
     * The nif
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nif;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The province
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $province;
    /**
     * The postal_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $postal_code;
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
     * The mobile_phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mobile_phone;
    /**
     * The iso_country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $iso_country;
    /**
     * The document_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $document_type;
    /**
     * Constructor method for SAParamB2CDataWSDO
     * @uses SAParamB2CDataWSDO::setName()
     * @uses SAParamB2CDataWSDO::setSurname()
     * @uses SAParamB2CDataWSDO::setNif()
     * @uses SAParamB2CDataWSDO::setAddress()
     * @uses SAParamB2CDataWSDO::setCity()
     * @uses SAParamB2CDataWSDO::setProvince()
     * @uses SAParamB2CDataWSDO::setPostal_code()
     * @uses SAParamB2CDataWSDO::setPhone()
     * @uses SAParamB2CDataWSDO::setEmail()
     * @uses SAParamB2CDataWSDO::setMobile_phone()
     * @uses SAParamB2CDataWSDO::setIso_country()
     * @uses SAParamB2CDataWSDO::setDocument_type()
     * @param string $name
     * @param string $surname
     * @param string $nif
     * @param string $address
     * @param string $city
     * @param string $province
     * @param string $postal_code
     * @param string $phone
     * @param string $email
     * @param string $mobile_phone
     * @param string $iso_country
     * @param string $document_type
     */
    public function __construct($name = null, $surname = null, $nif = null, $address = null, $city = null, $province = null, $postal_code = null, $phone = null, $email = null, $mobile_phone = null, $iso_country = null, $document_type = null)
    {
        $this
            ->setName($name)
            ->setSurname($surname)
            ->setNif($nif)
            ->setAddress($address)
            ->setCity($city)
            ->setProvince($province)
            ->setPostal_code($postal_code)
            ->setPhone($phone)
            ->setEmail($email)
            ->setMobile_phone($mobile_phone)
            ->setIso_country($iso_country)
            ->setDocument_type($document_type);
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
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
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
     * Get nif value
     * @return string|null
     */
    public function getNif()
    {
        return $this->nif;
    }
    /**
     * Set nif value
     * @param string $nif
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
     */
    public function setNif($nif = null)
    {
        // validation for constraint: string
        if (!is_null($nif) && !is_string($nif)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        $this->nif = $nif;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
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
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
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
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($province, true), gettype($province)), __LINE__);
        }
        $this->province = $province;
        return $this;
    }
    /**
     * Get postal_code value
     * @return string|null
     */
    public function getPostal_code()
    {
        return $this->postal_code;
    }
    /**
     * Set postal_code value
     * @param string $postal_code
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
     */
    public function setPostal_code($postal_code = null)
    {
        // validation for constraint: string
        if (!is_null($postal_code) && !is_string($postal_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postal_code, true), gettype($postal_code)), __LINE__);
        }
        $this->postal_code = $postal_code;
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
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
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
     * Get mobile_phone value
     * @return string|null
     */
    public function getMobile_phone()
    {
        return $this->mobile_phone;
    }
    /**
     * Set mobile_phone value
     * @param string $mobile_phone
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
     */
    public function setMobile_phone($mobile_phone = null)
    {
        // validation for constraint: string
        if (!is_null($mobile_phone) && !is_string($mobile_phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile_phone, true), gettype($mobile_phone)), __LINE__);
        }
        $this->mobile_phone = $mobile_phone;
        return $this;
    }
    /**
     * Get iso_country value
     * @return string|null
     */
    public function getIso_country()
    {
        return $this->iso_country;
    }
    /**
     * Set iso_country value
     * @param string $iso_country
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
     */
    public function setIso_country($iso_country = null)
    {
        // validation for constraint: string
        if (!is_null($iso_country) && !is_string($iso_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iso_country, true), gettype($iso_country)), __LINE__);
        }
        $this->iso_country = $iso_country;
        return $this;
    }
    /**
     * Get document_type value
     * @return string|null
     */
    public function getDocument_type()
    {
        return $this->document_type;
    }
    /**
     * Set document_type value
     * @param string $document_type
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
     */
    public function setDocument_type($document_type = null)
    {
        // validation for constraint: string
        if (!is_null($document_type) && !is_string($document_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document_type, true), gettype($document_type)), __LINE__);
        }
        $this->document_type = $document_type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAParamB2CDataWSDO
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
