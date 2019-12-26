<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAValuedBoatWSDO StructType
 * @subpackage Structs
 */
class FAValuedBoatWSDO extends AbstractStructBase
{
    /**
     * The key
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $key;
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
     * The zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $zone_id;
    /**
     * The zone_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zone_name;
    /**
     * The province
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $province;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The departure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $departure;
    /**
     * The arrival
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $arrival;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $longitude;
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $latitude;
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
     * The supports_direct_payment_supplier
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supports_direct_payment_supplier;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $price;
    /**
     * The available
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $available;
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
     * The cancellation_fees
     * Meta information extracted from the WSDL
     * - arrayType: tns:FACancellationFeeWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FACancellationFeeWSDO[]
     */
    public $cancellation_fees;
    /**
     * The article_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_type_id;
    /**
     * The observations
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $observations;
    /**
     * The promotion
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $promotion;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The crew
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $crew;
    /**
     * The widthboat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $widthboat;
    /**
     * The buildyear
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $buildyear;
    /**
     * The caution
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $caution;
    /**
     * The caution_with_si
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $caution_with_si;
    /**
     * The widthboat_ft
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $widthboat_ft;
    /**
     * The extras_included
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $extras_included;
    /**
     * The extras_pay_at_base
     * Meta information extracted from the WSDL
     * - arrayType: tns:FAExtraWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FAExtraWSDO[]
     */
    public $extras_pay_at_base;
    /**
     * Constructor method for FAValuedBoatWSDO
     * @uses FAValuedBoatWSDO::setKey()
     * @uses FAValuedBoatWSDO::setArticle_name()
     * @uses FAValuedBoatWSDO::setCurrency()
     * @uses FAValuedBoatWSDO::setDescripcion()
     * @uses FAValuedBoatWSDO::setZone_id()
     * @uses FAValuedBoatWSDO::setZone_name()
     * @uses FAValuedBoatWSDO::setProvince()
     * @uses FAValuedBoatWSDO::setCity()
     * @uses FAValuedBoatWSDO::setDeparture()
     * @uses FAValuedBoatWSDO::setArrival()
     * @uses FAValuedBoatWSDO::setLongitude()
     * @uses FAValuedBoatWSDO::setLatitude()
     * @uses FAValuedBoatWSDO::setSupplier_id()
     * @uses FAValuedBoatWSDO::setSupplier_name()
     * @uses FAValuedBoatWSDO::setSupplier_address()
     * @uses FAValuedBoatWSDO::setSupplier_cp()
     * @uses FAValuedBoatWSDO::setSupplier_province()
     * @uses FAValuedBoatWSDO::setSupplier_photo()
     * @uses FAValuedBoatWSDO::setSupplier_description()
     * @uses FAValuedBoatWSDO::setSupports_direct_payment_supplier()
     * @uses FAValuedBoatWSDO::setPrice()
     * @uses FAValuedBoatWSDO::setAvailable()
     * @uses FAValuedBoatWSDO::setSupplements()
     * @uses FAValuedBoatWSDO::setOffers()
     * @uses FAValuedBoatWSDO::setCancellation_fees()
     * @uses FAValuedBoatWSDO::setArticle_type_id()
     * @uses FAValuedBoatWSDO::setObservations()
     * @uses FAValuedBoatWSDO::setPromotion()
     * @uses FAValuedBoatWSDO::setDescription()
     * @uses FAValuedBoatWSDO::setCrew()
     * @uses FAValuedBoatWSDO::setWidthboat()
     * @uses FAValuedBoatWSDO::setBuildyear()
     * @uses FAValuedBoatWSDO::setCaution()
     * @uses FAValuedBoatWSDO::setCaution_with_si()
     * @uses FAValuedBoatWSDO::setWidthboat_ft()
     * @uses FAValuedBoatWSDO::setExtras_included()
     * @uses FAValuedBoatWSDO::setExtras_pay_at_base()
     * @param string $key
     * @param string $article_name
     * @param string $currency
     * @param string $descripcion
     * @param int $zone_id
     * @param string $zone_name
     * @param string $province
     * @param string $city
     * @param string $departure
     * @param string $arrival
     * @param string $longitude
     * @param string $latitude
     * @param int $supplier_id
     * @param string $supplier_name
     * @param string $supplier_address
     * @param string $supplier_cp
     * @param string $supplier_province
     * @param string $supplier_photo
     * @param string $supplier_description
     * @param string $supports_direct_payment_supplier
     * @param string $price
     * @param string $available
     * @param \Maseuropa\Booking\StructType\FASupplementWSDO[] $supplements
     * @param \Maseuropa\Booking\StructType\FAOfferWSDO[] $offers
     * @param \Maseuropa\Booking\StructType\FACancellationFeeWSDO[] $cancellation_fees
     * @param int $article_type_id
     * @param string $observations
     * @param string $promotion
     * @param string $description
     * @param string $crew
     * @param string $widthboat
     * @param string $buildyear
     * @param string $caution
     * @param string $caution_with_si
     * @param string $widthboat_ft
     * @param string $extras_included
     * @param \Maseuropa\Booking\StructType\FAExtraWSDO[] $extras_pay_at_base
     */
    public function __construct($key = null, $article_name = null, $currency = null, $descripcion = null, $zone_id = null, $zone_name = null, $province = null, $city = null, $departure = null, $arrival = null, $longitude = null, $latitude = null, $supplier_id = null, $supplier_name = null, $supplier_address = null, $supplier_cp = null, $supplier_province = null, $supplier_photo = null, $supplier_description = null, $supports_direct_payment_supplier = null, $price = null, $available = null, array $supplements = array(), array $offers = array(), array $cancellation_fees = array(), $article_type_id = null, $observations = null, $promotion = null, $description = null, $crew = null, $widthboat = null, $buildyear = null, $caution = null, $caution_with_si = null, $widthboat_ft = null, $extras_included = null, array $extras_pay_at_base = array())
    {
        $this
            ->setKey($key)
            ->setArticle_name($article_name)
            ->setCurrency($currency)
            ->setDescripcion($descripcion)
            ->setZone_id($zone_id)
            ->setZone_name($zone_name)
            ->setProvince($province)
            ->setCity($city)
            ->setDeparture($departure)
            ->setArrival($arrival)
            ->setLongitude($longitude)
            ->setLatitude($latitude)
            ->setSupplier_id($supplier_id)
            ->setSupplier_name($supplier_name)
            ->setSupplier_address($supplier_address)
            ->setSupplier_cp($supplier_cp)
            ->setSupplier_province($supplier_province)
            ->setSupplier_photo($supplier_photo)
            ->setSupplier_description($supplier_description)
            ->setSupports_direct_payment_supplier($supports_direct_payment_supplier)
            ->setPrice($price)
            ->setAvailable($available)
            ->setSupplements($supplements)
            ->setOffers($offers)
            ->setCancellation_fees($cancellation_fees)
            ->setArticle_type_id($article_type_id)
            ->setObservations($observations)
            ->setPromotion($promotion)
            ->setDescription($description)
            ->setCrew($crew)
            ->setWidthboat($widthboat)
            ->setBuildyear($buildyear)
            ->setCaution($caution)
            ->setCaution_with_si($caution_with_si)
            ->setWidthboat_ft($widthboat_ft)
            ->setExtras_included($extras_included)
            ->setExtras_pay_at_base($extras_pay_at_base);
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * Get zone_id value
     * @return int|null
     */
    public function getZone_id()
    {
        return $this->zone_id;
    }
    /**
     * Set zone_id value
     * @param int $zone_id
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setZone_id($zone_id = null)
    {
        // validation for constraint: int
        if (!is_null($zone_id) && !(is_int($zone_id) || ctype_digit($zone_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($zone_id, true), gettype($zone_id)), __LINE__);
        }
        $this->zone_id = $zone_id;
        return $this;
    }
    /**
     * Get zone_name value
     * @return string|null
     */
    public function getZone_name()
    {
        return $this->zone_name;
    }
    /**
     * Set zone_name value
     * @param string $zone_name
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setZone_name($zone_name = null)
    {
        // validation for constraint: string
        if (!is_null($zone_name) && !is_string($zone_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zone_name, true), gettype($zone_name)), __LINE__);
        }
        $this->zone_name = $zone_name;
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * Get departure value
     * @return string|null
     */
    public function getDeparture()
    {
        return $this->departure;
    }
    /**
     * Set departure value
     * @param string $departure
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setDeparture($departure = null)
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure, true), gettype($departure)), __LINE__);
        }
        $this->departure = $departure;
        return $this;
    }
    /**
     * Get arrival value
     * @return string|null
     */
    public function getArrival()
    {
        return $this->arrival;
    }
    /**
     * Set arrival value
     * @param string $arrival
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setArrival($arrival = null)
    {
        // validation for constraint: string
        if (!is_null($arrival) && !is_string($arrival)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival, true), gettype($arrival)), __LINE__);
        }
        $this->arrival = $arrival;
        return $this;
    }
    /**
     * Get longitude value
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param string $longitude
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Get latitude value
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param string $latitude
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * Get available value
     * @return string|null
     */
    public function getAvailable()
    {
        return $this->available;
    }
    /**
     * Set available value
     * @param string $available
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setAvailable($available = null)
    {
        // validation for constraint: string
        if (!is_null($available) && !is_string($available)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($available, true), gettype($available)), __LINE__);
        }
        $this->available = $available;
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
        foreach ($values as $fAValuedBoatWSDOSupplementsItem) {
            // validation for constraint: itemType
            if (!$fAValuedBoatWSDOSupplementsItem instanceof \Maseuropa\Booking\StructType\FASupplementWSDO) {
                $invalidValues[] = is_object($fAValuedBoatWSDOSupplementsItem) ? get_class($fAValuedBoatWSDOSupplementsItem) : sprintf('%s(%s)', gettype($fAValuedBoatWSDOSupplementsItem), var_export($fAValuedBoatWSDOSupplementsItem, true));
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
        foreach ($values as $fAValuedBoatWSDOOffersItem) {
            // validation for constraint: itemType
            if (!$fAValuedBoatWSDOOffersItem instanceof \Maseuropa\Booking\StructType\FAOfferWSDO) {
                $invalidValues[] = is_object($fAValuedBoatWSDOOffersItem) ? get_class($fAValuedBoatWSDOOffersItem) : sprintf('%s(%s)', gettype($fAValuedBoatWSDOOffersItem), var_export($fAValuedBoatWSDOOffersItem, true));
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
     * Get cancellation_fees value
     * @return \Maseuropa\Booking\StructType\FACancellationFeeWSDO[]|null
     */
    public function getCancellation_fees()
    {
        return $this->cancellation_fees;
    }
    /**
     * This method is responsible for validating the values passed to the setCancellation_fees method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancellation_fees method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancellation_feesForArrayConstraintsFromSetCancellation_fees(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fAValuedBoatWSDOCancellation_feesItem) {
            // validation for constraint: itemType
            if (!$fAValuedBoatWSDOCancellation_feesItem instanceof \Maseuropa\Booking\StructType\FACancellationFeeWSDO) {
                $invalidValues[] = is_object($fAValuedBoatWSDOCancellation_feesItem) ? get_class($fAValuedBoatWSDOCancellation_feesItem) : sprintf('%s(%s)', gettype($fAValuedBoatWSDOCancellation_feesItem), var_export($fAValuedBoatWSDOCancellation_feesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cancellation_fees property can only contain items of type \Maseuropa\Booking\StructType\FACancellationFeeWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set cancellation_fees value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FACancellationFeeWSDO[] $cancellation_fees
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setCancellation_fees(array $cancellation_fees = array())
    {
        // validation for constraint: array
        if ('' !== ($cancellation_feesArrayErrorMessage = self::validateCancellation_feesForArrayConstraintsFromSetCancellation_fees($cancellation_fees))) {
            throw new \InvalidArgumentException($cancellation_feesArrayErrorMessage, __LINE__);
        }
        $this->cancellation_fees = $cancellation_fees;
        return $this;
    }
    /**
     * Add item to cancellation_fees value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FACancellationFeeWSDO $item
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function addToCancellation_fees(\Maseuropa\Booking\StructType\FACancellationFeeWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FACancellationFeeWSDO) {
            throw new \InvalidArgumentException(sprintf('The cancellation_fees property can only contain items of type \Maseuropa\Booking\StructType\FACancellationFeeWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cancellation_fees[] = $item;
        return $this;
    }
    /**
     * Get article_type_id value
     * @return int|null
     */
    public function getArticle_type_id()
    {
        return $this->article_type_id;
    }
    /**
     * Set article_type_id value
     * @param int $article_type_id
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setArticle_type_id($article_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($article_type_id) && !(is_int($article_type_id) || ctype_digit($article_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($article_type_id, true), gettype($article_type_id)), __LINE__);
        }
        $this->article_type_id = $article_type_id;
        return $this;
    }
    /**
     * Get observations value
     * @return string|null
     */
    public function getObservations()
    {
        return $this->observations;
    }
    /**
     * Set observations value
     * @param string $observations
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setObservations($observations = null)
    {
        // validation for constraint: string
        if (!is_null($observations) && !is_string($observations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observations, true), gettype($observations)), __LINE__);
        }
        $this->observations = $observations;
        return $this;
    }
    /**
     * Get promotion value
     * @return string|null
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
    /**
     * Set promotion value
     * @param string $promotion
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setPromotion($promotion = null)
    {
        // validation for constraint: string
        if (!is_null($promotion) && !is_string($promotion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotion, true), gettype($promotion)), __LINE__);
        }
        $this->promotion = $promotion;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get crew value
     * @return string|null
     */
    public function getCrew()
    {
        return $this->crew;
    }
    /**
     * Set crew value
     * @param string $crew
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setCrew($crew = null)
    {
        // validation for constraint: string
        if (!is_null($crew) && !is_string($crew)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crew, true), gettype($crew)), __LINE__);
        }
        $this->crew = $crew;
        return $this;
    }
    /**
     * Get widthboat value
     * @return string|null
     */
    public function getWidthboat()
    {
        return $this->widthboat;
    }
    /**
     * Set widthboat value
     * @param string $widthboat
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setWidthboat($widthboat = null)
    {
        // validation for constraint: string
        if (!is_null($widthboat) && !is_string($widthboat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($widthboat, true), gettype($widthboat)), __LINE__);
        }
        $this->widthboat = $widthboat;
        return $this;
    }
    /**
     * Get buildyear value
     * @return string|null
     */
    public function getBuildyear()
    {
        return $this->buildyear;
    }
    /**
     * Set buildyear value
     * @param string $buildyear
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setBuildyear($buildyear = null)
    {
        // validation for constraint: string
        if (!is_null($buildyear) && !is_string($buildyear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buildyear, true), gettype($buildyear)), __LINE__);
        }
        $this->buildyear = $buildyear;
        return $this;
    }
    /**
     * Get caution value
     * @return string|null
     */
    public function getCaution()
    {
        return $this->caution;
    }
    /**
     * Set caution value
     * @param string $caution
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setCaution($caution = null)
    {
        // validation for constraint: string
        if (!is_null($caution) && !is_string($caution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($caution, true), gettype($caution)), __LINE__);
        }
        $this->caution = $caution;
        return $this;
    }
    /**
     * Get caution_with_si value
     * @return string|null
     */
    public function getCaution_with_si()
    {
        return $this->caution_with_si;
    }
    /**
     * Set caution_with_si value
     * @param string $caution_with_si
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setCaution_with_si($caution_with_si = null)
    {
        // validation for constraint: string
        if (!is_null($caution_with_si) && !is_string($caution_with_si)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($caution_with_si, true), gettype($caution_with_si)), __LINE__);
        }
        $this->caution_with_si = $caution_with_si;
        return $this;
    }
    /**
     * Get widthboat_ft value
     * @return string|null
     */
    public function getWidthboat_ft()
    {
        return $this->widthboat_ft;
    }
    /**
     * Set widthboat_ft value
     * @param string $widthboat_ft
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setWidthboat_ft($widthboat_ft = null)
    {
        // validation for constraint: string
        if (!is_null($widthboat_ft) && !is_string($widthboat_ft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($widthboat_ft, true), gettype($widthboat_ft)), __LINE__);
        }
        $this->widthboat_ft = $widthboat_ft;
        return $this;
    }
    /**
     * Get extras_included value
     * @return string|null
     */
    public function getExtras_included()
    {
        return $this->extras_included;
    }
    /**
     * Set extras_included value
     * @param string $extras_included
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setExtras_included($extras_included = null)
    {
        // validation for constraint: string
        if (!is_null($extras_included) && !is_string($extras_included)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extras_included, true), gettype($extras_included)), __LINE__);
        }
        $this->extras_included = $extras_included;
        return $this;
    }
    /**
     * Get extras_pay_at_base value
     * @return \Maseuropa\Booking\StructType\FAExtraWSDO[]|null
     */
    public function getExtras_pay_at_base()
    {
        return $this->extras_pay_at_base;
    }
    /**
     * This method is responsible for validating the values passed to the setExtras_pay_at_base method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtras_pay_at_base method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtras_pay_at_baseForArrayConstraintsFromSetExtras_pay_at_base(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fAValuedBoatWSDOExtras_pay_at_baseItem) {
            // validation for constraint: itemType
            if (!$fAValuedBoatWSDOExtras_pay_at_baseItem instanceof \Maseuropa\Booking\StructType\FAExtraWSDO) {
                $invalidValues[] = is_object($fAValuedBoatWSDOExtras_pay_at_baseItem) ? get_class($fAValuedBoatWSDOExtras_pay_at_baseItem) : sprintf('%s(%s)', gettype($fAValuedBoatWSDOExtras_pay_at_baseItem), var_export($fAValuedBoatWSDOExtras_pay_at_baseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The extras_pay_at_base property can only contain items of type \Maseuropa\Booking\StructType\FAExtraWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set extras_pay_at_base value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAExtraWSDO[] $extras_pay_at_base
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function setExtras_pay_at_base(array $extras_pay_at_base = array())
    {
        // validation for constraint: array
        if ('' !== ($extras_pay_at_baseArrayErrorMessage = self::validateExtras_pay_at_baseForArrayConstraintsFromSetExtras_pay_at_base($extras_pay_at_base))) {
            throw new \InvalidArgumentException($extras_pay_at_baseArrayErrorMessage, __LINE__);
        }
        $this->extras_pay_at_base = $extras_pay_at_base;
        return $this;
    }
    /**
     * Add item to extras_pay_at_base value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAExtraWSDO $item
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
     */
    public function addToExtras_pay_at_base(\Maseuropa\Booking\StructType\FAExtraWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FAExtraWSDO) {
            throw new \InvalidArgumentException(sprintf('The extras_pay_at_base property can only contain items of type \Maseuropa\Booking\StructType\FAExtraWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->extras_pay_at_base[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO
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
