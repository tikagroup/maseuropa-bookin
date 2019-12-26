<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAValuedArticleWSDO StructType
 * @subpackage Structs
 */
class FAValuedArticleWSDO extends AbstractStructBase
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
     * The result_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $result_id;
    /**
     * The central_bookings
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $central_bookings;
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
     * The category_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $category_type;
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
     * The pickup_points
     * Meta information extracted from the WSDL
     * - arrayType: tns:FAPickupPointWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FAPickupPointWSDO[]
     */
    public $pickup_points;
    /**
     * The room_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $room_type;
    /**
     * The board_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $board_type;
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
     * The mapping_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $mapping_type_id;
    /**
     * The mapping_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mapping_type;
    /**
     * The google_place_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $google_place_code;
    /**
     * The tripadvisor_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tripadvisor_code;
    /**
     * The mandatory_price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mandatory_price;
    /**
     * The commission
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $commission;
    /**
     * Constructor method for FAValuedArticleWSDO
     * @uses FAValuedArticleWSDO::setOccupation()
     * @uses FAValuedArticleWSDO::setArticle_id()
     * @uses FAValuedArticleWSDO::setArticle_name()
     * @uses FAValuedArticleWSDO::setCurrency()
     * @uses FAValuedArticleWSDO::setResult_id()
     * @uses FAValuedArticleWSDO::setCentral_bookings()
     * @uses FAValuedArticleWSDO::setDescripcion()
     * @uses FAValuedArticleWSDO::setZone_id()
     * @uses FAValuedArticleWSDO::setZone_name()
     * @uses FAValuedArticleWSDO::setProvince()
     * @uses FAValuedArticleWSDO::setCity()
     * @uses FAValuedArticleWSDO::setLongitude()
     * @uses FAValuedArticleWSDO::setLatitude()
     * @uses FAValuedArticleWSDO::setSupplier_id()
     * @uses FAValuedArticleWSDO::setSupplier_name()
     * @uses FAValuedArticleWSDO::setSupplier_address()
     * @uses FAValuedArticleWSDO::setSupplier_cp()
     * @uses FAValuedArticleWSDO::setSupplier_province()
     * @uses FAValuedArticleWSDO::setSupplier_photo()
     * @uses FAValuedArticleWSDO::setSupplier_description()
     * @uses FAValuedArticleWSDO::setCategory()
     * @uses FAValuedArticleWSDO::setSupports_direct_payment_supplier()
     * @uses FAValuedArticleWSDO::setPrice()
     * @uses FAValuedArticleWSDO::setAvailable()
     * @uses FAValuedArticleWSDO::setSupplements()
     * @uses FAValuedArticleWSDO::setOffers()
     * @uses FAValuedArticleWSDO::setCancellation_fees()
     * @uses FAValuedArticleWSDO::setCategory_type()
     * @uses FAValuedArticleWSDO::setArticle_type_id()
     * @uses FAValuedArticleWSDO::setObservations()
     * @uses FAValuedArticleWSDO::setPickup_points()
     * @uses FAValuedArticleWSDO::setRoom_type()
     * @uses FAValuedArticleWSDO::setBoard_type()
     * @uses FAValuedArticleWSDO::setPromotion()
     * @uses FAValuedArticleWSDO::setDescription()
     * @uses FAValuedArticleWSDO::setMapping_type_id()
     * @uses FAValuedArticleWSDO::setMapping_type()
     * @uses FAValuedArticleWSDO::setGoogle_place_code()
     * @uses FAValuedArticleWSDO::setTripadvisor_code()
     * @uses FAValuedArticleWSDO::setMandatory_price()
     * @uses FAValuedArticleWSDO::setCommission()
     * @param string $occupation
     * @param int $article_id
     * @param string $article_name
     * @param string $currency
     * @param int $result_id
     * @param string $central_bookings
     * @param string $descripcion
     * @param int $zone_id
     * @param string $zone_name
     * @param string $province
     * @param string $city
     * @param string $longitude
     * @param string $latitude
     * @param int $supplier_id
     * @param string $supplier_name
     * @param string $supplier_address
     * @param string $supplier_cp
     * @param string $supplier_province
     * @param string $supplier_photo
     * @param string $supplier_description
     * @param string $category
     * @param string $supports_direct_payment_supplier
     * @param string $price
     * @param string $available
     * @param \Maseuropa\Booking\StructType\FASupplementWSDO[] $supplements
     * @param \Maseuropa\Booking\StructType\FAOfferWSDO[] $offers
     * @param \Maseuropa\Booking\StructType\FACancellationFeeWSDO[] $cancellation_fees
     * @param string $category_type
     * @param int $article_type_id
     * @param string $observations
     * @param \Maseuropa\Booking\StructType\FAPickupPointWSDO[] $pickup_points
     * @param string $room_type
     * @param string $board_type
     * @param string $promotion
     * @param string $description
     * @param int $mapping_type_id
     * @param string $mapping_type
     * @param string $google_place_code
     * @param string $tripadvisor_code
     * @param string $mandatory_price
     * @param string $commission
     */
    public function __construct($occupation = null, $article_id = null, $article_name = null, $currency = null, $result_id = null, $central_bookings = null, $descripcion = null, $zone_id = null, $zone_name = null, $province = null, $city = null, $longitude = null, $latitude = null, $supplier_id = null, $supplier_name = null, $supplier_address = null, $supplier_cp = null, $supplier_province = null, $supplier_photo = null, $supplier_description = null, $category = null, $supports_direct_payment_supplier = null, $price = null, $available = null, array $supplements = array(), array $offers = array(), array $cancellation_fees = array(), $category_type = null, $article_type_id = null, $observations = null, array $pickup_points = array(), $room_type = null, $board_type = null, $promotion = null, $description = null, $mapping_type_id = null, $mapping_type = null, $google_place_code = null, $tripadvisor_code = null, $mandatory_price = null, $commission = null)
    {
        $this
            ->setOccupation($occupation)
            ->setArticle_id($article_id)
            ->setArticle_name($article_name)
            ->setCurrency($currency)
            ->setResult_id($result_id)
            ->setCentral_bookings($central_bookings)
            ->setDescripcion($descripcion)
            ->setZone_id($zone_id)
            ->setZone_name($zone_name)
            ->setProvince($province)
            ->setCity($city)
            ->setLongitude($longitude)
            ->setLatitude($latitude)
            ->setSupplier_id($supplier_id)
            ->setSupplier_name($supplier_name)
            ->setSupplier_address($supplier_address)
            ->setSupplier_cp($supplier_cp)
            ->setSupplier_province($supplier_province)
            ->setSupplier_photo($supplier_photo)
            ->setSupplier_description($supplier_description)
            ->setCategory($category)
            ->setSupports_direct_payment_supplier($supports_direct_payment_supplier)
            ->setPrice($price)
            ->setAvailable($available)
            ->setSupplements($supplements)
            ->setOffers($offers)
            ->setCancellation_fees($cancellation_fees)
            ->setCategory_type($category_type)
            ->setArticle_type_id($article_type_id)
            ->setObservations($observations)
            ->setPickup_points($pickup_points)
            ->setRoom_type($room_type)
            ->setBoard_type($board_type)
            ->setPromotion($promotion)
            ->setDescription($description)
            ->setMapping_type_id($mapping_type_id)
            ->setMapping_type($mapping_type)
            ->setGoogle_place_code($google_place_code)
            ->setTripadvisor_code($tripadvisor_code)
            ->setMandatory_price($mandatory_price)
            ->setCommission($commission);
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * Get result_id value
     * @return int|null
     */
    public function getResult_id()
    {
        return $this->result_id;
    }
    /**
     * Set result_id value
     * @param int $result_id
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setResult_id($result_id = null)
    {
        // validation for constraint: int
        if (!is_null($result_id) && !(is_int($result_id) || ctype_digit($result_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($result_id, true), gettype($result_id)), __LINE__);
        }
        $this->result_id = $result_id;
        return $this;
    }
    /**
     * Get central_bookings value
     * @return string|null
     */
    public function getCentral_bookings()
    {
        return $this->central_bookings;
    }
    /**
     * Set central_bookings value
     * @param string $central_bookings
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setCentral_bookings($central_bookings = null)
    {
        // validation for constraint: string
        if (!is_null($central_bookings) && !is_string($central_bookings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($central_bookings, true), gettype($central_bookings)), __LINE__);
        }
        $this->central_bookings = $central_bookings;
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
        foreach ($values as $fAValuedArticleWSDOSupplementsItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleWSDOSupplementsItem instanceof \Maseuropa\Booking\StructType\FASupplementWSDO) {
                $invalidValues[] = is_object($fAValuedArticleWSDOSupplementsItem) ? get_class($fAValuedArticleWSDOSupplementsItem) : sprintf('%s(%s)', gettype($fAValuedArticleWSDOSupplementsItem), var_export($fAValuedArticleWSDOSupplementsItem, true));
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
        foreach ($values as $fAValuedArticleWSDOOffersItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleWSDOOffersItem instanceof \Maseuropa\Booking\StructType\FAOfferWSDO) {
                $invalidValues[] = is_object($fAValuedArticleWSDOOffersItem) ? get_class($fAValuedArticleWSDOOffersItem) : sprintf('%s(%s)', gettype($fAValuedArticleWSDOOffersItem), var_export($fAValuedArticleWSDOOffersItem, true));
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
        foreach ($values as $fAValuedArticleWSDOCancellation_feesItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleWSDOCancellation_feesItem instanceof \Maseuropa\Booking\StructType\FACancellationFeeWSDO) {
                $invalidValues[] = is_object($fAValuedArticleWSDOCancellation_feesItem) ? get_class($fAValuedArticleWSDOCancellation_feesItem) : sprintf('%s(%s)', gettype($fAValuedArticleWSDOCancellation_feesItem), var_export($fAValuedArticleWSDOCancellation_feesItem, true));
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * Get category_type value
     * @return string|null
     */
    public function getCategory_type()
    {
        return $this->category_type;
    }
    /**
     * Set category_type value
     * @param string $category_type
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setCategory_type($category_type = null)
    {
        // validation for constraint: string
        if (!is_null($category_type) && !is_string($category_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category_type, true), gettype($category_type)), __LINE__);
        }
        $this->category_type = $category_type;
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * Get pickup_points value
     * @return \Maseuropa\Booking\StructType\FAPickupPointWSDO[]|null
     */
    public function getPickup_points()
    {
        return $this->pickup_points;
    }
    /**
     * This method is responsible for validating the values passed to the setPickup_points method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPickup_points method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePickup_pointsForArrayConstraintsFromSetPickup_points(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fAValuedArticleWSDOPickup_pointsItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleWSDOPickup_pointsItem instanceof \Maseuropa\Booking\StructType\FAPickupPointWSDO) {
                $invalidValues[] = is_object($fAValuedArticleWSDOPickup_pointsItem) ? get_class($fAValuedArticleWSDOPickup_pointsItem) : sprintf('%s(%s)', gettype($fAValuedArticleWSDOPickup_pointsItem), var_export($fAValuedArticleWSDOPickup_pointsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pickup_points property can only contain items of type \Maseuropa\Booking\StructType\FAPickupPointWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set pickup_points value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAPickupPointWSDO[] $pickup_points
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setPickup_points(array $pickup_points = array())
    {
        // validation for constraint: array
        if ('' !== ($pickup_pointsArrayErrorMessage = self::validatePickup_pointsForArrayConstraintsFromSetPickup_points($pickup_points))) {
            throw new \InvalidArgumentException($pickup_pointsArrayErrorMessage, __LINE__);
        }
        $this->pickup_points = $pickup_points;
        return $this;
    }
    /**
     * Add item to pickup_points value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAPickupPointWSDO $item
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function addToPickup_points(\Maseuropa\Booking\StructType\FAPickupPointWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FAPickupPointWSDO) {
            throw new \InvalidArgumentException(sprintf('The pickup_points property can only contain items of type \Maseuropa\Booking\StructType\FAPickupPointWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->pickup_points[] = $item;
        return $this;
    }
    /**
     * Get room_type value
     * @return string|null
     */
    public function getRoom_type()
    {
        return $this->room_type;
    }
    /**
     * Set room_type value
     * @param string $room_type
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setRoom_type($room_type = null)
    {
        // validation for constraint: string
        if (!is_null($room_type) && !is_string($room_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($room_type, true), gettype($room_type)), __LINE__);
        }
        $this->room_type = $room_type;
        return $this;
    }
    /**
     * Get board_type value
     * @return string|null
     */
    public function getBoard_type()
    {
        return $this->board_type;
    }
    /**
     * Set board_type value
     * @param string $board_type
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setBoard_type($board_type = null)
    {
        // validation for constraint: string
        if (!is_null($board_type) && !is_string($board_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($board_type, true), gettype($board_type)), __LINE__);
        }
        $this->board_type = $board_type;
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
     * Get mapping_type_id value
     * @return int|null
     */
    public function getMapping_type_id()
    {
        return $this->mapping_type_id;
    }
    /**
     * Set mapping_type_id value
     * @param int $mapping_type_id
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setMapping_type_id($mapping_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($mapping_type_id) && !(is_int($mapping_type_id) || ctype_digit($mapping_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mapping_type_id, true), gettype($mapping_type_id)), __LINE__);
        }
        $this->mapping_type_id = $mapping_type_id;
        return $this;
    }
    /**
     * Get mapping_type value
     * @return string|null
     */
    public function getMapping_type()
    {
        return $this->mapping_type;
    }
    /**
     * Set mapping_type value
     * @param string $mapping_type
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setMapping_type($mapping_type = null)
    {
        // validation for constraint: string
        if (!is_null($mapping_type) && !is_string($mapping_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mapping_type, true), gettype($mapping_type)), __LINE__);
        }
        $this->mapping_type = $mapping_type;
        return $this;
    }
    /**
     * Get google_place_code value
     * @return string|null
     */
    public function getGoogle_place_code()
    {
        return $this->google_place_code;
    }
    /**
     * Set google_place_code value
     * @param string $google_place_code
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setGoogle_place_code($google_place_code = null)
    {
        // validation for constraint: string
        if (!is_null($google_place_code) && !is_string($google_place_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($google_place_code, true), gettype($google_place_code)), __LINE__);
        }
        $this->google_place_code = $google_place_code;
        return $this;
    }
    /**
     * Get tripadvisor_code value
     * @return string|null
     */
    public function getTripadvisor_code()
    {
        return $this->tripadvisor_code;
    }
    /**
     * Set tripadvisor_code value
     * @param string $tripadvisor_code
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setTripadvisor_code($tripadvisor_code = null)
    {
        // validation for constraint: string
        if (!is_null($tripadvisor_code) && !is_string($tripadvisor_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tripadvisor_code, true), gettype($tripadvisor_code)), __LINE__);
        }
        $this->tripadvisor_code = $tripadvisor_code;
        return $this;
    }
    /**
     * Get mandatory_price value
     * @return string|null
     */
    public function getMandatory_price()
    {
        return $this->mandatory_price;
    }
    /**
     * Set mandatory_price value
     * @param string $mandatory_price
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setMandatory_price($mandatory_price = null)
    {
        // validation for constraint: string
        if (!is_null($mandatory_price) && !is_string($mandatory_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandatory_price, true), gettype($mandatory_price)), __LINE__);
        }
        $this->mandatory_price = $mandatory_price;
        return $this;
    }
    /**
     * Get commission value
     * @return string|null
     */
    public function getCommission()
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param string $commission
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
     */
    public function setCommission($commission = null)
    {
        // validation for constraint: string
        if (!is_null($commission) && !is_string($commission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commission, true), gettype($commission)), __LINE__);
        }
        $this->commission = $commission;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAValuedArticleWSDO
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
