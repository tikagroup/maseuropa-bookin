<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FARetvalFindNormalWSDO StructType
 * @subpackage Structs
 */
class FARetvalFindNormalWSDO extends AbstractStructBase
{
    /**
     * The valued_articles
     * Meta information extracted from the WSDL
     * - arrayType: tns:FAValuedArticleWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FAValuedArticleWSDO[]
     */
    public $valued_articles;
    /**
     * The valued_articles_count
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $valued_articles_count;
    /**
     * The country_zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $country_zone_id;
    /**
     * The country_zone_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $country_zone_name;
    /**
     * The zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zone_id;
    /**
     * The zone_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $zone_name;
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
     * The entry_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $entry_date;
    /**
     * The nights
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nights;
    /**
     * The exit_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $exit_date;
    /**
     * The suppliers_shown
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $suppliers_shown;
    /**
     * The query_time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $query_time;
    /**
     * The best_price_supplier
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $best_price_supplier;
    /**
     * Constructor method for FARetvalFindNormalWSDO
     * @uses FARetvalFindNormalWSDO::setValued_articles()
     * @uses FARetvalFindNormalWSDO::setValued_articles_count()
     * @uses FARetvalFindNormalWSDO::setCountry_zone_id()
     * @uses FARetvalFindNormalWSDO::setCountry_zone_name()
     * @uses FARetvalFindNormalWSDO::setZone_id()
     * @uses FARetvalFindNormalWSDO::setZone_name()
     * @uses FARetvalFindNormalWSDO::setCity()
     * @uses FARetvalFindNormalWSDO::setProvince()
     * @uses FARetvalFindNormalWSDO::setCategory()
     * @uses FARetvalFindNormalWSDO::setBoard_supplement()
     * @uses FARetvalFindNormalWSDO::setEntry_date()
     * @uses FARetvalFindNormalWSDO::setNights()
     * @uses FARetvalFindNormalWSDO::setExit_date()
     * @uses FARetvalFindNormalWSDO::setSuppliers_shown()
     * @uses FARetvalFindNormalWSDO::setQuery_time()
     * @uses FARetvalFindNormalWSDO::setBest_price_supplier()
     * @param \Maseuropa\Booking\StructType\FAValuedArticleWSDO[] $valued_articles
     * @param int $valued_articles_count
     * @param int $country_zone_id
     * @param int $country_zone_name
     * @param string $zone_id
     * @param int $zone_name
     * @param string $city
     * @param string $province
     * @param string $category
     * @param string $board_supplement
     * @param string $entry_date
     * @param string $nights
     * @param string $exit_date
     * @param string $suppliers_shown
     * @param string $query_time
     * @param bool $best_price_supplier
     */
    public function __construct(array $valued_articles = array(), $valued_articles_count = null, $country_zone_id = null, $country_zone_name = null, $zone_id = null, $zone_name = null, $city = null, $province = null, $category = null, $board_supplement = null, $entry_date = null, $nights = null, $exit_date = null, $suppliers_shown = null, $query_time = null, $best_price_supplier = null)
    {
        $this
            ->setValued_articles($valued_articles)
            ->setValued_articles_count($valued_articles_count)
            ->setCountry_zone_id($country_zone_id)
            ->setCountry_zone_name($country_zone_name)
            ->setZone_id($zone_id)
            ->setZone_name($zone_name)
            ->setCity($city)
            ->setProvince($province)
            ->setCategory($category)
            ->setBoard_supplement($board_supplement)
            ->setEntry_date($entry_date)
            ->setNights($nights)
            ->setExit_date($exit_date)
            ->setSuppliers_shown($suppliers_shown)
            ->setQuery_time($query_time)
            ->setBest_price_supplier($best_price_supplier);
    }
    /**
     * Get valued_articles value
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO[]|null
     */
    public function getValued_articles()
    {
        return $this->valued_articles;
    }
    /**
     * This method is responsible for validating the values passed to the setValued_articles method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValued_articles method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValued_articlesForArrayConstraintsFromSetValued_articles(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fARetvalFindNormalWSDOValued_articlesItem) {
            // validation for constraint: itemType
            if (!$fARetvalFindNormalWSDOValued_articlesItem instanceof \Maseuropa\Booking\StructType\FAValuedArticleWSDO) {
                $invalidValues[] = is_object($fARetvalFindNormalWSDOValued_articlesItem) ? get_class($fARetvalFindNormalWSDOValued_articlesItem) : sprintf('%s(%s)', gettype($fARetvalFindNormalWSDOValued_articlesItem), var_export($fARetvalFindNormalWSDOValued_articlesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The valued_articles property can only contain items of type \Maseuropa\Booking\StructType\FAValuedArticleWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set valued_articles value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAValuedArticleWSDO[] $valued_articles
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setValued_articles(array $valued_articles = array())
    {
        // validation for constraint: array
        if ('' !== ($valued_articlesArrayErrorMessage = self::validateValued_articlesForArrayConstraintsFromSetValued_articles($valued_articles))) {
            throw new \InvalidArgumentException($valued_articlesArrayErrorMessage, __LINE__);
        }
        $this->valued_articles = $valued_articles;
        return $this;
    }
    /**
     * Add item to valued_articles value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAValuedArticleWSDO $item
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function addToValued_articles(\Maseuropa\Booking\StructType\FAValuedArticleWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FAValuedArticleWSDO) {
            throw new \InvalidArgumentException(sprintf('The valued_articles property can only contain items of type \Maseuropa\Booking\StructType\FAValuedArticleWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->valued_articles[] = $item;
        return $this;
    }
    /**
     * Get valued_articles_count value
     * @return int|null
     */
    public function getValued_articles_count()
    {
        return $this->valued_articles_count;
    }
    /**
     * Set valued_articles_count value
     * @param int $valued_articles_count
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setValued_articles_count($valued_articles_count = null)
    {
        // validation for constraint: int
        if (!is_null($valued_articles_count) && !(is_int($valued_articles_count) || ctype_digit($valued_articles_count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($valued_articles_count, true), gettype($valued_articles_count)), __LINE__);
        }
        $this->valued_articles_count = $valued_articles_count;
        return $this;
    }
    /**
     * Get country_zone_id value
     * @return int|null
     */
    public function getCountry_zone_id()
    {
        return $this->country_zone_id;
    }
    /**
     * Set country_zone_id value
     * @param int $country_zone_id
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setCountry_zone_id($country_zone_id = null)
    {
        // validation for constraint: int
        if (!is_null($country_zone_id) && !(is_int($country_zone_id) || ctype_digit($country_zone_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($country_zone_id, true), gettype($country_zone_id)), __LINE__);
        }
        $this->country_zone_id = $country_zone_id;
        return $this;
    }
    /**
     * Get country_zone_name value
     * @return int|null
     */
    public function getCountry_zone_name()
    {
        return $this->country_zone_name;
    }
    /**
     * Set country_zone_name value
     * @param int $country_zone_name
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setCountry_zone_name($country_zone_name = null)
    {
        // validation for constraint: int
        if (!is_null($country_zone_name) && !(is_int($country_zone_name) || ctype_digit($country_zone_name))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($country_zone_name, true), gettype($country_zone_name)), __LINE__);
        }
        $this->country_zone_name = $country_zone_name;
        return $this;
    }
    /**
     * Get zone_id value
     * @return string|null
     */
    public function getZone_id()
    {
        return $this->zone_id;
    }
    /**
     * Set zone_id value
     * @param string $zone_id
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setZone_id($zone_id = null)
    {
        // validation for constraint: string
        if (!is_null($zone_id) && !is_string($zone_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zone_id, true), gettype($zone_id)), __LINE__);
        }
        $this->zone_id = $zone_id;
        return $this;
    }
    /**
     * Get zone_name value
     * @return int|null
     */
    public function getZone_name()
    {
        return $this->zone_name;
    }
    /**
     * Set zone_name value
     * @param int $zone_name
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setZone_name($zone_name = null)
    {
        // validation for constraint: int
        if (!is_null($zone_name) && !(is_int($zone_name) || ctype_digit($zone_name))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($zone_name, true), gettype($zone_name)), __LINE__);
        }
        $this->zone_name = $zone_name;
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
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
     * Get nights value
     * @return string|null
     */
    public function getNights()
    {
        return $this->nights;
    }
    /**
     * Set nights value
     * @param string $nights
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setNights($nights = null)
    {
        // validation for constraint: string
        if (!is_null($nights) && !is_string($nights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nights, true), gettype($nights)), __LINE__);
        }
        $this->nights = $nights;
        return $this;
    }
    /**
     * Get exit_date value
     * @return string|null
     */
    public function getExit_date()
    {
        return $this->exit_date;
    }
    /**
     * Set exit_date value
     * @param string $exit_date
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setExit_date($exit_date = null)
    {
        // validation for constraint: string
        if (!is_null($exit_date) && !is_string($exit_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exit_date, true), gettype($exit_date)), __LINE__);
        }
        $this->exit_date = $exit_date;
        return $this;
    }
    /**
     * Get suppliers_shown value
     * @return string|null
     */
    public function getSuppliers_shown()
    {
        return $this->suppliers_shown;
    }
    /**
     * Set suppliers_shown value
     * @param string $suppliers_shown
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setSuppliers_shown($suppliers_shown = null)
    {
        // validation for constraint: string
        if (!is_null($suppliers_shown) && !is_string($suppliers_shown)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suppliers_shown, true), gettype($suppliers_shown)), __LINE__);
        }
        $this->suppliers_shown = $suppliers_shown;
        return $this;
    }
    /**
     * Get query_time value
     * @return string|null
     */
    public function getQuery_time()
    {
        return $this->query_time;
    }
    /**
     * Set query_time value
     * @param string $query_time
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setQuery_time($query_time = null)
    {
        // validation for constraint: string
        if (!is_null($query_time) && !is_string($query_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query_time, true), gettype($query_time)), __LINE__);
        }
        $this->query_time = $query_time;
        return $this;
    }
    /**
     * Get best_price_supplier value
     * @return bool|null
     */
    public function getBest_price_supplier()
    {
        return $this->best_price_supplier;
    }
    /**
     * Set best_price_supplier value
     * @param bool $best_price_supplier
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
     */
    public function setBest_price_supplier($best_price_supplier = null)
    {
        // validation for constraint: boolean
        if (!is_null($best_price_supplier) && !is_bool($best_price_supplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($best_price_supplier, true), gettype($best_price_supplier)), __LINE__);
        }
        $this->best_price_supplier = $best_price_supplier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FARetvalFindNormalWSDO
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
