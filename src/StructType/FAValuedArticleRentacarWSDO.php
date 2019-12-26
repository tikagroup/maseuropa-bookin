<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAValuedArticleRentacarWSDO StructType
 * @subpackage Structs
 */
class FAValuedArticleRentacarWSDO extends AbstractStructBase
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
     * The vehicle_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_type;
    /**
     * The vehicle_category
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_category;
    /**
     * The vehicle_zone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_zone;
    /**
     * The vehicle_fuel
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_fuel;
    /**
     * The vehicle_change
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_change;
    /**
     * The vehicle_doors
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_doors;
    /**
     * The vehicle_pax_max
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_pax_max;
    /**
     * The vehicle_baggage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_baggage;
    /**
     * The vehicle_ac
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_ac;
    /**
     * The vehicle_gps
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_gps;
    /**
     * The vehicle_photo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehicle_photo;
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
     * The supplier_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $supplier_id;
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
     * The commission
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $commission;
    /**
     * Constructor method for FAValuedArticleRentacarWSDO
     * @uses FAValuedArticleRentacarWSDO::setOccupation()
     * @uses FAValuedArticleRentacarWSDO::setArticle_id()
     * @uses FAValuedArticleRentacarWSDO::setArticle_name()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_type()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_category()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_zone()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_fuel()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_change()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_doors()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_pax_max()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_baggage()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_ac()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_gps()
     * @uses FAValuedArticleRentacarWSDO::setVehicle_photo()
     * @uses FAValuedArticleRentacarWSDO::setCurrency()
     * @uses FAValuedArticleRentacarWSDO::setResult_id()
     * @uses FAValuedArticleRentacarWSDO::setSupplier_id()
     * @uses FAValuedArticleRentacarWSDO::setCentral_bookings()
     * @uses FAValuedArticleRentacarWSDO::setDescripcion()
     * @uses FAValuedArticleRentacarWSDO::setSupports_direct_payment_supplier()
     * @uses FAValuedArticleRentacarWSDO::setPrice()
     * @uses FAValuedArticleRentacarWSDO::setAvailable()
     * @uses FAValuedArticleRentacarWSDO::setSupplements()
     * @uses FAValuedArticleRentacarWSDO::setOffers()
     * @uses FAValuedArticleRentacarWSDO::setCancellation_fees()
     * @uses FAValuedArticleRentacarWSDO::setCategory_type()
     * @uses FAValuedArticleRentacarWSDO::setArticle_type_id()
     * @uses FAValuedArticleRentacarWSDO::setObservations()
     * @uses FAValuedArticleRentacarWSDO::setCommission()
     * @param string $occupation
     * @param int $article_id
     * @param string $article_name
     * @param string $vehicle_type
     * @param string $vehicle_category
     * @param string $vehicle_zone
     * @param string $vehicle_fuel
     * @param string $vehicle_change
     * @param string $vehicle_doors
     * @param string $vehicle_pax_max
     * @param string $vehicle_baggage
     * @param string $vehicle_ac
     * @param string $vehicle_gps
     * @param string $vehicle_photo
     * @param string $currency
     * @param int $result_id
     * @param int $supplier_id
     * @param string $central_bookings
     * @param string $descripcion
     * @param string $supports_direct_payment_supplier
     * @param string $price
     * @param string $available
     * @param \Maseuropa\Booking\StructType\FASupplementWSDO[] $supplements
     * @param \Maseuropa\Booking\StructType\FAOfferWSDO[] $offers
     * @param \Maseuropa\Booking\StructType\FACancellationFeeWSDO[] $cancellation_fees
     * @param string $category_type
     * @param int $article_type_id
     * @param string $observations
     * @param string $commission
     */
    public function __construct($occupation = null, $article_id = null, $article_name = null, $vehicle_type = null, $vehicle_category = null, $vehicle_zone = null, $vehicle_fuel = null, $vehicle_change = null, $vehicle_doors = null, $vehicle_pax_max = null, $vehicle_baggage = null, $vehicle_ac = null, $vehicle_gps = null, $vehicle_photo = null, $currency = null, $result_id = null, $supplier_id = null, $central_bookings = null, $descripcion = null, $supports_direct_payment_supplier = null, $price = null, $available = null, array $supplements = array(), array $offers = array(), array $cancellation_fees = array(), $category_type = null, $article_type_id = null, $observations = null, $commission = null)
    {
        $this
            ->setOccupation($occupation)
            ->setArticle_id($article_id)
            ->setArticle_name($article_name)
            ->setVehicle_type($vehicle_type)
            ->setVehicle_category($vehicle_category)
            ->setVehicle_zone($vehicle_zone)
            ->setVehicle_fuel($vehicle_fuel)
            ->setVehicle_change($vehicle_change)
            ->setVehicle_doors($vehicle_doors)
            ->setVehicle_pax_max($vehicle_pax_max)
            ->setVehicle_baggage($vehicle_baggage)
            ->setVehicle_ac($vehicle_ac)
            ->setVehicle_gps($vehicle_gps)
            ->setVehicle_photo($vehicle_photo)
            ->setCurrency($currency)
            ->setResult_id($result_id)
            ->setSupplier_id($supplier_id)
            ->setCentral_bookings($central_bookings)
            ->setDescripcion($descripcion)
            ->setSupports_direct_payment_supplier($supports_direct_payment_supplier)
            ->setPrice($price)
            ->setAvailable($available)
            ->setSupplements($supplements)
            ->setOffers($offers)
            ->setCancellation_fees($cancellation_fees)
            ->setCategory_type($category_type)
            ->setArticle_type_id($article_type_id)
            ->setObservations($observations)
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * Get vehicle_type value
     * @return string|null
     */
    public function getVehicle_type()
    {
        return $this->vehicle_type;
    }
    /**
     * Set vehicle_type value
     * @param string $vehicle_type
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_type($vehicle_type = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_type) && !is_string($vehicle_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_type, true), gettype($vehicle_type)), __LINE__);
        }
        $this->vehicle_type = $vehicle_type;
        return $this;
    }
    /**
     * Get vehicle_category value
     * @return string|null
     */
    public function getVehicle_category()
    {
        return $this->vehicle_category;
    }
    /**
     * Set vehicle_category value
     * @param string $vehicle_category
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_category($vehicle_category = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_category) && !is_string($vehicle_category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_category, true), gettype($vehicle_category)), __LINE__);
        }
        $this->vehicle_category = $vehicle_category;
        return $this;
    }
    /**
     * Get vehicle_zone value
     * @return string|null
     */
    public function getVehicle_zone()
    {
        return $this->vehicle_zone;
    }
    /**
     * Set vehicle_zone value
     * @param string $vehicle_zone
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_zone($vehicle_zone = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_zone) && !is_string($vehicle_zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_zone, true), gettype($vehicle_zone)), __LINE__);
        }
        $this->vehicle_zone = $vehicle_zone;
        return $this;
    }
    /**
     * Get vehicle_fuel value
     * @return string|null
     */
    public function getVehicle_fuel()
    {
        return $this->vehicle_fuel;
    }
    /**
     * Set vehicle_fuel value
     * @param string $vehicle_fuel
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_fuel($vehicle_fuel = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_fuel) && !is_string($vehicle_fuel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_fuel, true), gettype($vehicle_fuel)), __LINE__);
        }
        $this->vehicle_fuel = $vehicle_fuel;
        return $this;
    }
    /**
     * Get vehicle_change value
     * @return string|null
     */
    public function getVehicle_change()
    {
        return $this->vehicle_change;
    }
    /**
     * Set vehicle_change value
     * @param string $vehicle_change
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_change($vehicle_change = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_change) && !is_string($vehicle_change)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_change, true), gettype($vehicle_change)), __LINE__);
        }
        $this->vehicle_change = $vehicle_change;
        return $this;
    }
    /**
     * Get vehicle_doors value
     * @return string|null
     */
    public function getVehicle_doors()
    {
        return $this->vehicle_doors;
    }
    /**
     * Set vehicle_doors value
     * @param string $vehicle_doors
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_doors($vehicle_doors = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_doors) && !is_string($vehicle_doors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_doors, true), gettype($vehicle_doors)), __LINE__);
        }
        $this->vehicle_doors = $vehicle_doors;
        return $this;
    }
    /**
     * Get vehicle_pax_max value
     * @return string|null
     */
    public function getVehicle_pax_max()
    {
        return $this->vehicle_pax_max;
    }
    /**
     * Set vehicle_pax_max value
     * @param string $vehicle_pax_max
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_pax_max($vehicle_pax_max = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_pax_max) && !is_string($vehicle_pax_max)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_pax_max, true), gettype($vehicle_pax_max)), __LINE__);
        }
        $this->vehicle_pax_max = $vehicle_pax_max;
        return $this;
    }
    /**
     * Get vehicle_baggage value
     * @return string|null
     */
    public function getVehicle_baggage()
    {
        return $this->vehicle_baggage;
    }
    /**
     * Set vehicle_baggage value
     * @param string $vehicle_baggage
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_baggage($vehicle_baggage = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_baggage) && !is_string($vehicle_baggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_baggage, true), gettype($vehicle_baggage)), __LINE__);
        }
        $this->vehicle_baggage = $vehicle_baggage;
        return $this;
    }
    /**
     * Get vehicle_ac value
     * @return string|null
     */
    public function getVehicle_ac()
    {
        return $this->vehicle_ac;
    }
    /**
     * Set vehicle_ac value
     * @param string $vehicle_ac
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_ac($vehicle_ac = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_ac) && !is_string($vehicle_ac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_ac, true), gettype($vehicle_ac)), __LINE__);
        }
        $this->vehicle_ac = $vehicle_ac;
        return $this;
    }
    /**
     * Get vehicle_gps value
     * @return string|null
     */
    public function getVehicle_gps()
    {
        return $this->vehicle_gps;
    }
    /**
     * Set vehicle_gps value
     * @param string $vehicle_gps
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_gps($vehicle_gps = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_gps) && !is_string($vehicle_gps)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_gps, true), gettype($vehicle_gps)), __LINE__);
        }
        $this->vehicle_gps = $vehicle_gps;
        return $this;
    }
    /**
     * Get vehicle_photo value
     * @return string|null
     */
    public function getVehicle_photo()
    {
        return $this->vehicle_photo;
    }
    /**
     * Set vehicle_photo value
     * @param string $vehicle_photo
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
     */
    public function setVehicle_photo($vehicle_photo = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_photo) && !is_string($vehicle_photo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_photo, true), gettype($vehicle_photo)), __LINE__);
        }
        $this->vehicle_photo = $vehicle_photo;
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
        foreach ($values as $fAValuedArticleRentacarWSDOSupplementsItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleRentacarWSDOSupplementsItem instanceof \Maseuropa\Booking\StructType\FASupplementWSDO) {
                $invalidValues[] = is_object($fAValuedArticleRentacarWSDOSupplementsItem) ? get_class($fAValuedArticleRentacarWSDOSupplementsItem) : sprintf('%s(%s)', gettype($fAValuedArticleRentacarWSDOSupplementsItem), var_export($fAValuedArticleRentacarWSDOSupplementsItem, true));
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
        foreach ($values as $fAValuedArticleRentacarWSDOOffersItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleRentacarWSDOOffersItem instanceof \Maseuropa\Booking\StructType\FAOfferWSDO) {
                $invalidValues[] = is_object($fAValuedArticleRentacarWSDOOffersItem) ? get_class($fAValuedArticleRentacarWSDOOffersItem) : sprintf('%s(%s)', gettype($fAValuedArticleRentacarWSDOOffersItem), var_export($fAValuedArticleRentacarWSDOOffersItem, true));
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
        foreach ($values as $fAValuedArticleRentacarWSDOCancellation_feesItem) {
            // validation for constraint: itemType
            if (!$fAValuedArticleRentacarWSDOCancellation_feesItem instanceof \Maseuropa\Booking\StructType\FACancellationFeeWSDO) {
                $invalidValues[] = is_object($fAValuedArticleRentacarWSDOCancellation_feesItem) ? get_class($fAValuedArticleRentacarWSDOCancellation_feesItem) : sprintf('%s(%s)', gettype($fAValuedArticleRentacarWSDOCancellation_feesItem), var_export($fAValuedArticleRentacarWSDOCancellation_feesItem, true));
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
     * @return \Maseuropa\Booking\StructType\FAValuedArticleRentacarWSDO
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
