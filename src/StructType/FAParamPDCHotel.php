<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAParamPDCHotel StructType
 * @subpackage Structs
 */
class FAParamPDCHotel extends AbstractStructBase
{
    /**
     * The central_visible
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $central_visible;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $category;
    /**
     * The board_supplement
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $board_supplement;
    /**
     * The only_quotas
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $only_quotas;
    /**
     * The only_offerst
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $only_offerst;
    /**
     * The no_description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $no_description;
    /**
     * Constructor method for FAParamPDCHotel
     * @uses FAParamPDCHotel::setCentral_visible()
     * @uses FAParamPDCHotel::setCategory()
     * @uses FAParamPDCHotel::setBoard_supplement()
     * @uses FAParamPDCHotel::setOnly_quotas()
     * @uses FAParamPDCHotel::setOnly_offerst()
     * @uses FAParamPDCHotel::setNo_description()
     * @param int $central_visible
     * @param string $category
     * @param string $board_supplement
     * @param int $only_quotas
     * @param int $only_offerst
     * @param int $no_description
     */
    public function __construct($central_visible = null, $category = null, $board_supplement = null, $only_quotas = null, $only_offerst = null, $no_description = null)
    {
        $this
            ->setCentral_visible($central_visible)
            ->setCategory($category)
            ->setBoard_supplement($board_supplement)
            ->setOnly_quotas($only_quotas)
            ->setOnly_offerst($only_offerst)
            ->setNo_description($no_description);
    }
    /**
     * Get central_visible value
     * @return int|null
     */
    public function getCentral_visible()
    {
        return $this->central_visible;
    }
    /**
     * Set central_visible value
     * @param int $central_visible
     * @return \Maseuropa\Booking\StructType\FAParamPDCHotel
     */
    public function setCentral_visible($central_visible = null)
    {
        // validation for constraint: int
        if (!is_null($central_visible) && !(is_int($central_visible) || ctype_digit($central_visible))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($central_visible, true), gettype($central_visible)), __LINE__);
        }
        $this->central_visible = $central_visible;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Maseuropa\Booking\StructType\FAParamPDCHotel
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get board_supplement value
     * @return string|null
     */
    public function getBoard_supplement()
    {
        return $this->board_supplement;
    }
    /**
     * Set board_supplement value
     * @param string $board_supplement
     * @return \Maseuropa\Booking\StructType\FAParamPDCHotel
     */
    public function setBoard_supplement($board_supplement = null)
    {
        // validation for constraint: string
        if (!is_null($board_supplement) && !is_string($board_supplement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($board_supplement, true), gettype($board_supplement)), __LINE__);
        }
        $this->board_supplement = $board_supplement;
        return $this;
    }
    /**
     * Get only_quotas value
     * @return int|null
     */
    public function getOnly_quotas()
    {
        return $this->only_quotas;
    }
    /**
     * Set only_quotas value
     * @param int $only_quotas
     * @return \Maseuropa\Booking\StructType\FAParamPDCHotel
     */
    public function setOnly_quotas($only_quotas = null)
    {
        // validation for constraint: int
        if (!is_null($only_quotas) && !(is_int($only_quotas) || ctype_digit($only_quotas))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($only_quotas, true), gettype($only_quotas)), __LINE__);
        }
        $this->only_quotas = $only_quotas;
        return $this;
    }
    /**
     * Get only_offerst value
     * @return int|null
     */
    public function getOnly_offerst()
    {
        return $this->only_offerst;
    }
    /**
     * Set only_offerst value
     * @param int $only_offerst
     * @return \Maseuropa\Booking\StructType\FAParamPDCHotel
     */
    public function setOnly_offerst($only_offerst = null)
    {
        // validation for constraint: int
        if (!is_null($only_offerst) && !(is_int($only_offerst) || ctype_digit($only_offerst))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($only_offerst, true), gettype($only_offerst)), __LINE__);
        }
        $this->only_offerst = $only_offerst;
        return $this;
    }
    /**
     * Get no_description value
     * @return int|null
     */
    public function getNo_description()
    {
        return $this->no_description;
    }
    /**
     * Set no_description value
     * @param int $no_description
     * @return \Maseuropa\Booking\StructType\FAParamPDCHotel
     */
    public function setNo_description($no_description = null)
    {
        // validation for constraint: int
        if (!is_null($no_description) && !(is_int($no_description) || ctype_digit($no_description))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($no_description, true), gettype($no_description)), __LINE__);
        }
        $this->no_description = $no_description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAParamPDCHotel
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
