<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAParamOccupationsDataWSDO StructType
 * @subpackage Structs
 */
class SAParamOccupationsDataWSDO extends AbstractStructBase
{
    /**
     * The num_occupation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $num_occupation;
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
     * The pickup_point_assignment_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pickup_point_assignment_id;
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
     * @var int
     */
    public $nights;
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
     * The age_children
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $age_children;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $price;
    /**
     * The supplements
     * Meta information extracted from the WSDL
     * - arrayType: tns:SAParamSupplement[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\SAParamSupplement[]
     */
    public $supplements;
    /**
     * The paxes
     * Meta information extracted from the WSDL
     * - arrayType: tns:SAParamPaxWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\SAParamPaxWSDO[]
     */
    public $paxes;
    /**
     * The offer_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $offer_id;
    /**
     * The insurance_assignment_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $insurance_assignment_id;
    /**
     * The insurance_identificator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $insurance_identificator;
    /**
     * The pvd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pvd;
    /**
     * The shipping_address
     * Meta information extracted from the WSDL
     * - arrayType: tns:SAShippingAddressWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\SAShippingAddressWSDO[]
     */
    public $shipping_address;
    /**
     * Constructor method for SAParamOccupationsDataWSDO
     * @uses SAParamOccupationsDataWSDO::setNum_occupation()
     * @uses SAParamOccupationsDataWSDO::setArticle_class_type_id()
     * @uses SAParamOccupationsDataWSDO::setArticle_id()
     * @uses SAParamOccupationsDataWSDO::setPickup_point_assignment_id()
     * @uses SAParamOccupationsDataWSDO::setEntry_date()
     * @uses SAParamOccupationsDataWSDO::setNights()
     * @uses SAParamOccupationsDataWSDO::setNum_adults()
     * @uses SAParamOccupationsDataWSDO::setNum_children()
     * @uses SAParamOccupationsDataWSDO::setAge_children()
     * @uses SAParamOccupationsDataWSDO::setPrice()
     * @uses SAParamOccupationsDataWSDO::setSupplements()
     * @uses SAParamOccupationsDataWSDO::setPaxes()
     * @uses SAParamOccupationsDataWSDO::setOffer_id()
     * @uses SAParamOccupationsDataWSDO::setInsurance_assignment_id()
     * @uses SAParamOccupationsDataWSDO::setInsurance_identificator()
     * @uses SAParamOccupationsDataWSDO::setPvd()
     * @uses SAParamOccupationsDataWSDO::setShipping_address()
     * @param string $num_occupation
     * @param int $article_class_type_id
     * @param int $article_id
     * @param int $pickup_point_assignment_id
     * @param string $entry_date
     * @param int $nights
     * @param int $num_adults
     * @param int $num_children
     * @param string $age_children
     * @param string $price
     * @param \Maseuropa\Booking\StructType\SAParamSupplement[] $supplements
     * @param \Maseuropa\Booking\StructType\SAParamPaxWSDO[] $paxes
     * @param int $offer_id
     * @param int $insurance_assignment_id
     * @param string $insurance_identificator
     * @param string $pvd
     * @param \Maseuropa\Booking\StructType\SAShippingAddressWSDO[] $shipping_address
     */
    public function __construct($num_occupation = null, $article_class_type_id = null, $article_id = null, $pickup_point_assignment_id = null, $entry_date = null, $nights = null, $num_adults = null, $num_children = null, $age_children = null, $price = null, array $supplements = array(), array $paxes = array(), $offer_id = null, $insurance_assignment_id = null, $insurance_identificator = null, $pvd = null, array $shipping_address = array())
    {
        $this
            ->setNum_occupation($num_occupation)
            ->setArticle_class_type_id($article_class_type_id)
            ->setArticle_id($article_id)
            ->setPickup_point_assignment_id($pickup_point_assignment_id)
            ->setEntry_date($entry_date)
            ->setNights($nights)
            ->setNum_adults($num_adults)
            ->setNum_children($num_children)
            ->setAge_children($age_children)
            ->setPrice($price)
            ->setSupplements($supplements)
            ->setPaxes($paxes)
            ->setOffer_id($offer_id)
            ->setInsurance_assignment_id($insurance_assignment_id)
            ->setInsurance_identificator($insurance_identificator)
            ->setPvd($pvd)
            ->setShipping_address($shipping_address);
    }
    /**
     * Get num_occupation value
     * @return string|null
     */
    public function getNum_occupation()
    {
        return $this->num_occupation;
    }
    /**
     * Set num_occupation value
     * @param string $num_occupation
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setNum_occupation($num_occupation = null)
    {
        // validation for constraint: string
        if (!is_null($num_occupation) && !is_string($num_occupation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($num_occupation, true), gettype($num_occupation)), __LINE__);
        }
        $this->num_occupation = $num_occupation;
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
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
     * Get pickup_point_assignment_id value
     * @return int|null
     */
    public function getPickup_point_assignment_id()
    {
        return $this->pickup_point_assignment_id;
    }
    /**
     * Set pickup_point_assignment_id value
     * @param int $pickup_point_assignment_id
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setPickup_point_assignment_id($pickup_point_assignment_id = null)
    {
        // validation for constraint: int
        if (!is_null($pickup_point_assignment_id) && !(is_int($pickup_point_assignment_id) || ctype_digit($pickup_point_assignment_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pickup_point_assignment_id, true), gettype($pickup_point_assignment_id)), __LINE__);
        }
        $this->pickup_point_assignment_id = $pickup_point_assignment_id;
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
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
     * @return int|null
     */
    public function getNights()
    {
        return $this->nights;
    }
    /**
     * Set nights value
     * @param int $nights
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setNights($nights = null)
    {
        // validation for constraint: int
        if (!is_null($nights) && !(is_int($nights) || ctype_digit($nights))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nights, true), gettype($nights)), __LINE__);
        }
        $this->nights = $nights;
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
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
     * Get age_children value
     * @return string|null
     */
    public function getAge_children()
    {
        return $this->age_children;
    }
    /**
     * Set age_children value
     * @param string $age_children
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setAge_children($age_children = null)
    {
        // validation for constraint: string
        if (!is_null($age_children) && !is_string($age_children)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($age_children, true), gettype($age_children)), __LINE__);
        }
        $this->age_children = $age_children;
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
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
     * Get supplements value
     * @return \Maseuropa\Booking\StructType\SAParamSupplement[]|null
     */
    public function getSupplements()
    {
        return $this->supplements;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplements method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplements method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplementsForArrayConstraintsFromSetSupplements(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sAParamOccupationsDataWSDOSupplementsItem) {
            // validation for constraint: itemType
            if (!$sAParamOccupationsDataWSDOSupplementsItem instanceof \Maseuropa\Booking\StructType\SAParamSupplement) {
                $invalidValues[] = is_object($sAParamOccupationsDataWSDOSupplementsItem) ? get_class($sAParamOccupationsDataWSDOSupplementsItem) : sprintf('%s(%s)', gettype($sAParamOccupationsDataWSDOSupplementsItem), var_export($sAParamOccupationsDataWSDOSupplementsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplements property can only contain items of type \Maseuropa\Booking\StructType\SAParamSupplement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set supplements value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SAParamSupplement[] $supplements
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setSupplements(array $supplements = array())
    {
        // validation for constraint: array
        if ('' !== ($supplementsArrayErrorMessage = self::validateSupplementsForArrayConstraintsFromSetSupplements($supplements))) {
            throw new \InvalidArgumentException($supplementsArrayErrorMessage, __LINE__);
        }
        $this->supplements = $supplements;
        return $this;
    }
    /**
     * Add item to supplements value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SAParamSupplement $item
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function addToSupplements(\Maseuropa\Booking\StructType\SAParamSupplement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\SAParamSupplement) {
            throw new \InvalidArgumentException(sprintf('The supplements property can only contain items of type \Maseuropa\Booking\StructType\SAParamSupplement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplements[] = $item;
        return $this;
    }
    /**
     * Get paxes value
     * @return \Maseuropa\Booking\StructType\SAParamPaxWSDO[]|null
     */
    public function getPaxes()
    {
        return $this->paxes;
    }
    /**
     * This method is responsible for validating the values passed to the setPaxes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaxes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaxesForArrayConstraintsFromSetPaxes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sAParamOccupationsDataWSDOPaxesItem) {
            // validation for constraint: itemType
            if (!$sAParamOccupationsDataWSDOPaxesItem instanceof \Maseuropa\Booking\StructType\SAParamPaxWSDO) {
                $invalidValues[] = is_object($sAParamOccupationsDataWSDOPaxesItem) ? get_class($sAParamOccupationsDataWSDOPaxesItem) : sprintf('%s(%s)', gettype($sAParamOccupationsDataWSDOPaxesItem), var_export($sAParamOccupationsDataWSDOPaxesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The paxes property can only contain items of type \Maseuropa\Booking\StructType\SAParamPaxWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set paxes value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SAParamPaxWSDO[] $paxes
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setPaxes(array $paxes = array())
    {
        // validation for constraint: array
        if ('' !== ($paxesArrayErrorMessage = self::validatePaxesForArrayConstraintsFromSetPaxes($paxes))) {
            throw new \InvalidArgumentException($paxesArrayErrorMessage, __LINE__);
        }
        $this->paxes = $paxes;
        return $this;
    }
    /**
     * Add item to paxes value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SAParamPaxWSDO $item
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function addToPaxes(\Maseuropa\Booking\StructType\SAParamPaxWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\SAParamPaxWSDO) {
            throw new \InvalidArgumentException(sprintf('The paxes property can only contain items of type \Maseuropa\Booking\StructType\SAParamPaxWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->paxes[] = $item;
        return $this;
    }
    /**
     * Get offer_id value
     * @return int|null
     */
    public function getOffer_id()
    {
        return $this->offer_id;
    }
    /**
     * Set offer_id value
     * @param int $offer_id
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setOffer_id($offer_id = null)
    {
        // validation for constraint: int
        if (!is_null($offer_id) && !(is_int($offer_id) || ctype_digit($offer_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offer_id, true), gettype($offer_id)), __LINE__);
        }
        $this->offer_id = $offer_id;
        return $this;
    }
    /**
     * Get insurance_assignment_id value
     * @return int|null
     */
    public function getInsurance_assignment_id()
    {
        return $this->insurance_assignment_id;
    }
    /**
     * Set insurance_assignment_id value
     * @param int $insurance_assignment_id
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setInsurance_assignment_id($insurance_assignment_id = null)
    {
        // validation for constraint: int
        if (!is_null($insurance_assignment_id) && !(is_int($insurance_assignment_id) || ctype_digit($insurance_assignment_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insurance_assignment_id, true), gettype($insurance_assignment_id)), __LINE__);
        }
        $this->insurance_assignment_id = $insurance_assignment_id;
        return $this;
    }
    /**
     * Get insurance_identificator value
     * @return string|null
     */
    public function getInsurance_identificator()
    {
        return $this->insurance_identificator;
    }
    /**
     * Set insurance_identificator value
     * @param string $insurance_identificator
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setInsurance_identificator($insurance_identificator = null)
    {
        // validation for constraint: string
        if (!is_null($insurance_identificator) && !is_string($insurance_identificator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurance_identificator, true), gettype($insurance_identificator)), __LINE__);
        }
        $this->insurance_identificator = $insurance_identificator;
        return $this;
    }
    /**
     * Get pvd value
     * @return string|null
     */
    public function getPvd()
    {
        return $this->pvd;
    }
    /**
     * Set pvd value
     * @param string $pvd
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setPvd($pvd = null)
    {
        // validation for constraint: string
        if (!is_null($pvd) && !is_string($pvd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pvd, true), gettype($pvd)), __LINE__);
        }
        $this->pvd = $pvd;
        return $this;
    }
    /**
     * Get shipping_address value
     * @return \Maseuropa\Booking\StructType\SAShippingAddressWSDO[]|null
     */
    public function getShipping_address()
    {
        return $this->shipping_address;
    }
    /**
     * This method is responsible for validating the values passed to the setShipping_address method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipping_address method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipping_addressForArrayConstraintsFromSetShipping_address(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sAParamOccupationsDataWSDOShipping_addressItem) {
            // validation for constraint: itemType
            if (!$sAParamOccupationsDataWSDOShipping_addressItem instanceof \Maseuropa\Booking\StructType\SAShippingAddressWSDO) {
                $invalidValues[] = is_object($sAParamOccupationsDataWSDOShipping_addressItem) ? get_class($sAParamOccupationsDataWSDOShipping_addressItem) : sprintf('%s(%s)', gettype($sAParamOccupationsDataWSDOShipping_addressItem), var_export($sAParamOccupationsDataWSDOShipping_addressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipping_address property can only contain items of type \Maseuropa\Booking\StructType\SAShippingAddressWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set shipping_address value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SAShippingAddressWSDO[] $shipping_address
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function setShipping_address(array $shipping_address = array())
    {
        // validation for constraint: array
        if ('' !== ($shipping_addressArrayErrorMessage = self::validateShipping_addressForArrayConstraintsFromSetShipping_address($shipping_address))) {
            throw new \InvalidArgumentException($shipping_addressArrayErrorMessage, __LINE__);
        }
        $this->shipping_address = $shipping_address;
        return $this;
    }
    /**
     * Add item to shipping_address value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SAShippingAddressWSDO $item
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
     */
    public function addToShipping_address(\Maseuropa\Booking\StructType\SAShippingAddressWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\SAShippingAddressWSDO) {
            throw new \InvalidArgumentException(sprintf('The shipping_address property can only contain items of type \Maseuropa\Booking\StructType\SAShippingAddressWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipping_address[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsDataWSDO
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
