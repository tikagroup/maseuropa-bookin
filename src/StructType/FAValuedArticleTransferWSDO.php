<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAValuedArticleTransferWSDO StructType
 * @subpackage Structs
 */
class FAValuedArticleTransferWSDO extends AbstractStructBase
{
    /**
     * The occupation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $occupation;
    /**
     * The article_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_id;
    /**
     * The article_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $article_name;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currency;
    /**
     * The descripcion
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $descripcion;
    /**
     * The supplier_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $supplier_id;
    /**
     * The supplier_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_name;
    /**
     * The supplier_address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_address;
    /**
     * The supplier_cp
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_cp;
    /**
     * The supplier_province
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_province;
    /**
     * The supplier_photo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_photo;
    /**
     * The supplier_description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_description;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $category;
    /**
     * The supports_direct_payment_supplier
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supports_direct_payment_supplier;
    /**
     * The available
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $available;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $price;
    /**
     * The offers
     * Meta information extracted from the WSDL
     * - arrayType: tns:FAOfferWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FAOfferWSDO[]
     */
    public $offers;
    /**
     * The supplements
     * Meta information extracted from the WSDL
     * - arrayType: tns:FASupplementWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FASupplementWSDO[]
     */
    public $supplements;
    /**
     * The article_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $article_type;
    /**
     * Constructor method for FAValuedArticleTransferWSDO
     * @uses FAValuedArticleTransferWSDO::setOccupation()
     * @uses FAValuedArticleTransferWSDO::setArticle_id()
     * @uses FAValuedArticleTransferWSDO::setArticle_name()
     * @uses FAValuedArticleTransferWSDO::setCurrency()
     * @uses FAValuedArticleTransferWSDO::setDescripcion()
     * @uses FAValuedArticleTransferWSDO::setSupplier_id()
     * @uses FAValuedArticleTransferWSDO::setSupplier_name()
     * @uses FAValuedArticleTransferWSDO::setSupplier_address()
     * @uses FAValuedArticleTransferWSDO::setSupplier_cp()
     * @uses FAValuedArticleTransferWSDO::setSupplier_province()
     * @uses FAValuedArticleTransferWSDO::setSupplier_photo()
     * @uses FAValuedArticleTransferWSDO::setSupplier_description()
     * @uses FAValuedArticleTransferWSDO::setCategory()
     * @uses FAValuedArticleTransferWSDO::setSupports_direct_payment_supplier()
     * @uses FAValuedArticleTransferWSDO::setAvailable()
     * @uses FAValuedArticleTransferWSDO::setPrice()
     * @uses FAValuedArticleTransferWSDO::setOffers()
     * @uses FAValuedArticleTransferWSDO::setSupplements()
     * @uses FAValuedArticleTransferWSDO::setArticle_type()
     * @param string $occupation
     * @param int $article_id
     * @param string $article_name
     * @param string $currency
     * @param string $descripcion
     * @param int $supplier_id
     * @param string $supplier_name
     * @param string $supplier_address
     * @param string $supplier_cp
     * @param string $supplier_province
     * @param string $supplier_photo
     * @param string $supplier_description
     * @param string $category
     * @param string $supports_direct_payment_supplier
     * @param int $available
     * @param string $price
     * @param \Maseuropa\Booking\StructType\FAOfferWSDO[] $offers
     * @param \Maseuropa\Booking\StructType\FASupplementWSDO[] $supplements
     * @param string $article_type
     */
    public function __construct($occupation = null, $article_id = null, $article_name = null, $currency = null, $descripcion = null, $supplier_id = null, $supplier_name = null, $supplier_address = null, $supplier_cp = null, $supplier_province = null, $supplier_photo = null, $supplier_description = null, $category = null, $supports_direct_payment_supplier = null, $available = null, $price = null, array $offers = array(), array $supplements = array(), $article_type = null)
    {
        $this
            ->setOccupation($occupation)
            ->setArticle_id($article_id)
            ->setArticle_name($article_name)
            ->setCurrency($currency)
            ->setDescripcion($descripcion)
            ->setSupplier_id($supplier_id)
            ->setSupplier_name($supplier_name)
            ->setSupplier_address($supplier_address)
            ->setSupplier_cp($supplier_cp)
            ->setSupplier_province($supplier_province)
            ->setSupplier_photo($supplier_photo)
            ->setSupplier_description($supplier_description)
            ->setCategory($category)
            ->setSupports_direct_payment_supplier($supports_direct_payment_supplier)
            ->setAvailable($available)
            ->setPrice($price)
            ->setOffers($offers)
            ->setSupplements($supplements)
            ->setArticle_type($article_type);
    }
    /**
     * Get occupation value
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->occupation;
    }
    /**
     * Set occupation value
     * @param string $occupation
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setOccupation($occupation = null)
    {
        // validation for constraint: string
        if (!is_null($occupation) && !is_string($occupation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($occupation, true), gettype($occupation)), __LINE__);
        }
        $this->occupation = $occupation;
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
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
     * Get article_name value
     * @return string|null
     */
    public function getArticle_name()
    {
        return $this->article_name;
    }
    /**
     * Set article_name value
     * @param string $article_name
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setArticle_name($article_name = null)
    {
        // validation for constraint: string
        if (!is_null($article_name) && !is_string($article_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($article_name, true), gettype($article_name)), __LINE__);
        }
        $this->article_name = $article_name;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get descripcion value
     * @return string|null
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * Set descripcion value
     * @param string $descripcion
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setDescripcion($descripcion = null)
    {
        // validation for constraint: string
        if (!is_null($descripcion) && !is_string($descripcion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcion, true), gettype($descripcion)), __LINE__);
        }
        $this->descripcion = $descripcion;
        return $this;
    }
    /**
     * Get supplier_id value
     * @return int|null
     */
    public function getSupplier_id()
    {
        return $this->supplier_id;
    }
    /**
     * Set supplier_id value
     * @param int $supplier_id
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setSupplier_id($supplier_id = null)
    {
        // validation for constraint: int
        if (!is_null($supplier_id) && !(is_int($supplier_id) || ctype_digit($supplier_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supplier_id, true), gettype($supplier_id)), __LINE__);
        }
        $this->supplier_id = $supplier_id;
        return $this;
    }
    /**
     * Get supplier_name value
     * @return string|null
     */
    public function getSupplier_name()
    {
        return $this->supplier_name;
    }
    /**
     * Set supplier_name value
     * @param string $supplier_name
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setSupplier_name($supplier_name = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_name) && !is_string($supplier_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_name, true), gettype($supplier_name)), __LINE__);
        }
        $this->supplier_name = $supplier_name;
        return $this;
    }
    /**
     * Get supplier_address value
     * @return string|null
     */
    public function getSupplier_address()
    {
        return $this->supplier_address;
    }
    /**
     * Set supplier_address value
     * @param string $supplier_address
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setSupplier_address($supplier_address = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_address) && !is_string($supplier_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_address, true), gettype($supplier_address)), __LINE__);
        }
        $this->supplier_address = $supplier_address;
        return $this;
    }
    /**
     * Get supplier_cp value
     * @return string|null
     */
    public function getSupplier_cp()
    {
        return $this->supplier_cp;
    }
    /**
     * Set supplier_cp value
     * @param string $supplier_cp
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setSupplier_cp($supplier_cp = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_cp) && !is_string($supplier_cp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_cp, true), gettype($supplier_cp)), __LINE__);
        }
        $this->supplier_cp = $supplier_cp;
        return $this;
    }
    /**
     * Get supplier_province value
     * @return string|null
     */
    public function getSupplier_province()
    {
        return $this->supplier_province;
    }
    /**
     * Set supplier_province value
     * @param string $supplier_province
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setSupplier_province($supplier_province = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_province) && !is_string($supplier_province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_province, true), gettype($supplier_province)), __LINE__);
        }
        $this->supplier_province = $supplier_province;
        return $this;
    }
    /**
     * Get supplier_photo value
     * @return string|null
     */
    public function getSupplier_photo()
    {
        return $this->supplier_photo;
    }
    /**
     * Set supplier_photo value
     * @param string $supplier_photo
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setSupplier_photo($supplier_photo = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_photo) && !is_string($supplier_photo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_photo, true), gettype($supplier_photo)), __LINE__);
        }
        $this->supplier_photo = $supplier_photo;
        return $this;
    }
    /**
     * Get supplier_description value
     * @return string|null
     */
    public function getSupplier_description()
    {
        return $this->supplier_description;
    }
    /**
     * Set supplier_description value
     * @param string $supplier_description
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setSupplier_description($supplier_description = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_description) && !is_string($supplier_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_description, true), gettype($supplier_description)), __LINE__);
        }
        $this->supplier_description = $supplier_description;
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
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
     * Get supports_direct_payment_supplier value
     * @return string|null
     */
    public function getSupports_direct_payment_supplier()
    {
        return $this->supports_direct_payment_supplier;
    }
    /**
     * Set supports_direct_payment_supplier value
     * @param string $supports_direct_payment_supplier
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setSupports_direct_payment_supplier($supports_direct_payment_supplier = null)
    {
        // validation for constraint: string
        if (!is_null($supports_direct_payment_supplier) && !is_string($supports_direct_payment_supplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supports_direct_payment_supplier, true), gettype($supports_direct_payment_supplier)), __LINE__);
        }
        $this->supports_direct_payment_supplier = $supports_direct_payment_supplier;
        return $this;
    }
    /**
     * Get available value
     * @return int|null
     */
    public function getAvailable()
    {
        return $this->available;
    }
    /**
     * Set available value
     * @param int $available
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setAvailable($available = null)
    {
        // validation for constraint: int
        if (!is_null($available) && !(is_int($available) || ctype_digit($available))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($available, true), gettype($available)), __LINE__);
        }
        $this->available = $available;
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
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
     * Get offers value
     * @return \Maseuropa\Booking\StructType\FAOfferWSDO[]|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * This method is responsible for validating the values passed to the setOffers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOffers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOffersForArrayConstraintsFromSetOffers(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fAValuedArticleTransferWSDOOffersItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleTransferWSDOOffersItem instanceof \Maseuropa\Booking\StructType\FAOfferWSDO) {
                $invalidValues[] = is_object($fAValuedArticleTransferWSDOOffersItem) ? get_class($fAValuedArticleTransferWSDOOffersItem) : sprintf('%s(%s)', gettype($fAValuedArticleTransferWSDOOffersItem), var_export($fAValuedArticleTransferWSDOOffersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The offers property can only contain items of type \Maseuropa\Booking\StructType\FAOfferWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set offers value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAOfferWSDO[] $offers
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setOffers(array $offers = array())
    {
        // validation for constraint: array
        if ('' !== ($offersArrayErrorMessage = self::validateOffersForArrayConstraintsFromSetOffers($offers))) {
            throw new \InvalidArgumentException($offersArrayErrorMessage, __LINE__);
        }
        $this->offers = $offers;
        return $this;
    }
    /**
     * Add item to offers value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAOfferWSDO $item
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function addToOffers(\Maseuropa\Booking\StructType\FAOfferWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FAOfferWSDO) {
            throw new \InvalidArgumentException(sprintf('The offers property can only contain items of type \Maseuropa\Booking\StructType\FAOfferWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->offers[] = $item;
        return $this;
    }
    /**
     * Get supplements value
     * @return \Maseuropa\Booking\StructType\FASupplementWSDO[]|null
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
        foreach ($values as $fAValuedArticleTransferWSDOSupplementsItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleTransferWSDOSupplementsItem instanceof \Maseuropa\Booking\StructType\FASupplementWSDO) {
                $invalidValues[] = is_object($fAValuedArticleTransferWSDOSupplementsItem) ? get_class($fAValuedArticleTransferWSDOSupplementsItem) : sprintf('%s(%s)', gettype($fAValuedArticleTransferWSDOSupplementsItem), var_export($fAValuedArticleTransferWSDOSupplementsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplements property can only contain items of type \Maseuropa\Booking\StructType\FASupplementWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set supplements value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FASupplementWSDO[] $supplements
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
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
     * @param \Maseuropa\Booking\StructType\FASupplementWSDO $item
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function addToSupplements(\Maseuropa\Booking\StructType\FASupplementWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FASupplementWSDO) {
            throw new \InvalidArgumentException(sprintf('The supplements property can only contain items of type \Maseuropa\Booking\StructType\FASupplementWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplements[] = $item;
        return $this;
    }
    /**
     * Get article_type value
     * @return string|null
     */
    public function getArticle_type()
    {
        return $this->article_type;
    }
    /**
     * Set article_type value
     * @param string $article_type
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
     */
    public function setArticle_type($article_type = null)
    {
        // validation for constraint: string
        if (!is_null($article_type) && !is_string($article_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($article_type, true), gettype($article_type)), __LINE__);
        }
        $this->article_type = $article_type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAValuedArticleTransferWSDO
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
