<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CFParamOccupationWS StructType
 * @subpackage Structs
 */
class CFParamOccupationWS extends AbstractStructBase
{
    /**
     * The occupation_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $occupation_id;
    /**
     * The article_class_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_class_type_id;
    /**
     * The article_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_id;
    /**
     * The entry_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $entry_date;
    /**
     * The num_night
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_night;
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
     * The price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $price;
    /**
     * Constructor method for CFParamOccupationWS
     * @uses CFParamOccupationWS::setOccupation_id()
     * @uses CFParamOccupationWS::setArticle_class_type_id()
     * @uses CFParamOccupationWS::setArticle_id()
     * @uses CFParamOccupationWS::setEntry_date()
     * @uses CFParamOccupationWS::setNum_night()
     * @uses CFParamOccupationWS::setNum_adults()
     * @uses CFParamOccupationWS::setNum_children()
     * @uses CFParamOccupationWS::setPrice()
     * @param string $occupation_id
     * @param int $article_class_type_id
     * @param int $article_id
     * @param string $entry_date
     * @param int $num_night
     * @param int $num_adults
     * @param int $num_children
     * @param string $price
     */
    public function __construct($occupation_id = null, $article_class_type_id = null, $article_id = null, $entry_date = null, $num_night = null, $num_adults = null, $num_children = null, $price = null)
    {
        $this
            ->setOccupation_id($occupation_id)
            ->setArticle_class_type_id($article_class_type_id)
            ->setArticle_id($article_id)
            ->setEntry_date($entry_date)
            ->setNum_night($num_night)
            ->setNum_adults($num_adults)
            ->setNum_children($num_children)
            ->setPrice($price);
    }
    /**
     * Get occupation_id value
     * @return string|null
     */
    public function getOccupation_id()
    {
        return $this->occupation_id;
    }
    /**
     * Set occupation_id value
     * @param string $occupation_id
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
     */
    public function setOccupation_id($occupation_id = null)
    {
        // validation for constraint: string
        if (!is_null($occupation_id) && !is_string($occupation_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($occupation_id, true), gettype($occupation_id)), __LINE__);
        }
        $this->occupation_id = $occupation_id;
        return $this;
    }
    /**
     * Get article_class_type_id value
     * @return int|null
     */
    public function getArticle_class_type_id()
    {
        return $this->article_class_type_id;
    }
    /**
     * Set article_class_type_id value
     * @param int $article_class_type_id
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
     */
    public function setArticle_class_type_id($article_class_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($article_class_type_id) && !(is_int($article_class_type_id) || ctype_digit($article_class_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($article_class_type_id, true), gettype($article_class_type_id)), __LINE__);
        }
        $this->article_class_type_id = $article_class_type_id;
        return $this;
    }
    /**
     * Get article_id value
     * @return int|null
     */
    public function getArticle_id()
    {
        return $this->article_id;
    }
    /**
     * Set article_id value
     * @param int $article_id
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
     */
    public function setArticle_id($article_id = null)
    {
        // validation for constraint: int
        if (!is_null($article_id) && !(is_int($article_id) || ctype_digit($article_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($article_id, true), gettype($article_id)), __LINE__);
        }
        $this->article_id = $article_id;
        return $this;
    }
    /**
     * Get entry_date value
     * @return string|null
     */
    public function getEntry_date()
    {
        return $this->entry_date;
    }
    /**
     * Set entry_date value
     * @param string $entry_date
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
     */
    public function setEntry_date($entry_date = null)
    {
        // validation for constraint: string
        if (!is_null($entry_date) && !is_string($entry_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entry_date, true), gettype($entry_date)), __LINE__);
        }
        $this->entry_date = $entry_date;
        return $this;
    }
    /**
     * Get num_night value
     * @return int|null
     */
    public function getNum_night()
    {
        return $this->num_night;
    }
    /**
     * Set num_night value
     * @param int $num_night
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
     */
    public function setNum_night($num_night = null)
    {
        // validation for constraint: int
        if (!is_null($num_night) && !(is_int($num_night) || ctype_digit($num_night))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_night, true), gettype($num_night)), __LINE__);
        }
        $this->num_night = $num_night;
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
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
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
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
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
     * Get price value
     * @return string|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param string $price
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
     */
    public function setPrice($price = null)
    {
        // validation for constraint: string
        if (!is_null($price) && !is_string($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\CFParamOccupationWS
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
