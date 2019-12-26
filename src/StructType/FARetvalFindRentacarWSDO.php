<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FARetvalFindRentacarWSDO StructType
 * @subpackage Structs
 */
class FARetvalFindRentacarWSDO extends AbstractStructBase
{
    /**
     * The valued_articles
     * Meta information extracted from the WSDL
     * - arrayType: tns:FAValuedArticleRentacarWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO[]
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
     * Constructor method for FARetvalFindRentacarWSDO
     * @uses FARetvalFindRentacarWSDO::setValued_articles()
     * @uses FARetvalFindRentacarWSDO::setValued_articles_count()
     * @uses FARetvalFindRentacarWSDO::setEntry_date()
     * @uses FARetvalFindRentacarWSDO::setNights()
     * @uses FARetvalFindRentacarWSDO::setExit_date()
     * @uses FARetvalFindRentacarWSDO::setSuppliers_shown()
     * @uses FARetvalFindRentacarWSDO::setQuery_time()
     * @param \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO[] $valued_articles
     * @param int $valued_articles_count
     * @param string $entry_date
     * @param string $nights
     * @param string $exit_date
     * @param string $suppliers_shown
     * @param string $query_time
     */
    public function __construct(array $valued_articles = array(), $valued_articles_count = null, $entry_date = null, $nights = null, $exit_date = null, $suppliers_shown = null, $query_time = null)
    {
        $this
            ->setValued_articles($valued_articles)
            ->setValued_articles_count($valued_articles_count)
            ->setEntry_date($entry_date)
            ->setNights($nights)
            ->setExit_date($exit_date)
            ->setSuppliers_shown($suppliers_shown)
            ->setQuery_time($query_time);
    }
    /**
     * Get valued_articles value
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO[]|null
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
        foreach ($values as $fARetvalFindRentacarWSDOValued_articlesItem) {
            // validation for constraint: itemType
            if (!$fARetvalFindRentacarWSDOValued_articlesItem instanceof \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO) {
                $invalidValues[] = is_object($fARetvalFindRentacarWSDOValued_articlesItem) ? get_class($fARetvalFindRentacarWSDOValued_articlesItem) : sprintf('%s(%s)', gettype($fARetvalFindRentacarWSDOValued_articlesItem), var_export($fARetvalFindRentacarWSDOValued_articlesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The valued_articles property can only contain items of type \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set valued_articles value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO[] $valued_articles
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
     * @param \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO $item
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
     */
    public function addToValued_articles(\Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO) {
            throw new \InvalidArgumentException(sprintf('The valued_articles property can only contain items of type \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FARetvalFindRentacarWSDO
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
