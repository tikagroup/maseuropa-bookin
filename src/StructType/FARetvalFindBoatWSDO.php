<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FARetvalFindBoatWSDO StructType
 * @subpackage Structs
 */
class FARetvalFindBoatWSDO extends AbstractStructBase
{
    /**
     * The boats
     * Meta information extracted from the WSDL
     * - arrayType: tns:FAValuedBoatWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FAValuedBoatWSDO[]
     */
    public $boats;
    /**
     * The query_time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $query_time;
    /**
     * The article_class_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_class_type_id;
    /**
     * The country_zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $country_zone_id;
    /**
     * The zone_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $zone_id;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The num_days
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_days;
    /**
     * The id_boat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id_boat;
    /**
     * The num_cabin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_cabin;
    /**
     * The num_cabin_min
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_cabin_min;
    /**
     * The num_cabin_max
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_cabin_max;
    /**
     * The constr_year
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $constr_year;
    /**
     * The constr_year_min
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $constr_year_min;
    /**
     * The constr_year_max
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $constr_year_max;
    /**
     * The boat_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $boat_type;
    /**
     * The crew
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $crew;
    /**
     * The long_min
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $long_min;
    /**
     * The long_max
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $long_max;
    /**
     * The occupation_boat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Maseuropa\Booking\StructType\FAParamOccupationBoatWS
     */
    public $occupation_boat;
    /**
     * The cabin
     * Meta information extracted from the WSDL
     * - arrayType: tns:FAParamCabinWS[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FAParamCabinWS[]
     */
    public $cabin;
    /**
     * Constructor method for FARetvalFindBoatWSDO
     * @uses FARetvalFindBoatWSDO::setBoats()
     * @uses FARetvalFindBoatWSDO::setQuery_time()
     * @uses FARetvalFindBoatWSDO::setArticle_class_type_id()
     * @uses FARetvalFindBoatWSDO::setCountry_zone_id()
     * @uses FARetvalFindBoatWSDO::setZone_id()
     * @uses FARetvalFindBoatWSDO::setDate()
     * @uses FARetvalFindBoatWSDO::setNum_days()
     * @uses FARetvalFindBoatWSDO::setId_boat()
     * @uses FARetvalFindBoatWSDO::setNum_cabin()
     * @uses FARetvalFindBoatWSDO::setNum_cabin_min()
     * @uses FARetvalFindBoatWSDO::setNum_cabin_max()
     * @uses FARetvalFindBoatWSDO::setConstr_year()
     * @uses FARetvalFindBoatWSDO::setConstr_year_min()
     * @uses FARetvalFindBoatWSDO::setConstr_year_max()
     * @uses FARetvalFindBoatWSDO::setBoat_type()
     * @uses FARetvalFindBoatWSDO::setCrew()
     * @uses FARetvalFindBoatWSDO::setLong_min()
     * @uses FARetvalFindBoatWSDO::setLong_max()
     * @uses FARetvalFindBoatWSDO::setOccupation_boat()
     * @uses FARetvalFindBoatWSDO::setCabin()
     * @param \Maseuropa\Booking\StructType\FAValuedBoatWSDO[] $boats
     * @param string $query_time
     * @param int $article_class_type_id
     * @param int $country_zone_id
     * @param int $zone_id
     * @param string $date
     * @param int $num_days
     * @param int $id_boat
     * @param int $num_cabin
     * @param int $num_cabin_min
     * @param int $num_cabin_max
     * @param int $constr_year
     * @param int $constr_year_min
     * @param int $constr_year_max
     * @param string $boat_type
     * @param string $crew
     * @param int $long_min
     * @param int $long_max
     * @param \Maseuropa\Booking\StructType\FAParamOccupationBoatWS $occupation_boat
     * @param \Maseuropa\Booking\StructType\FAParamCabinWS[] $cabin
     */
    public function __construct(array $boats = array(), $query_time = null, $article_class_type_id = null, $country_zone_id = null, $zone_id = null, $date = null, $num_days = null, $id_boat = null, $num_cabin = null, $num_cabin_min = null, $num_cabin_max = null, $constr_year = null, $constr_year_min = null, $constr_year_max = null, $boat_type = null, $crew = null, $long_min = null, $long_max = null, \Maseuropa\Booking\StructType\FAParamOccupationBoatWS $occupation_boat = null, array $cabin = array())
    {
        $this
            ->setBoats($boats)
            ->setQuery_time($query_time)
            ->setArticle_class_type_id($article_class_type_id)
            ->setCountry_zone_id($country_zone_id)
            ->setZone_id($zone_id)
            ->setDate($date)
            ->setNum_days($num_days)
            ->setId_boat($id_boat)
            ->setNum_cabin($num_cabin)
            ->setNum_cabin_min($num_cabin_min)
            ->setNum_cabin_max($num_cabin_max)
            ->setConstr_year($constr_year)
            ->setConstr_year_min($constr_year_min)
            ->setConstr_year_max($constr_year_max)
            ->setBoat_type($boat_type)
            ->setCrew($crew)
            ->setLong_min($long_min)
            ->setLong_max($long_max)
            ->setOccupation_boat($occupation_boat)
            ->setCabin($cabin);
    }
    /**
     * Get boats value
     * @return \Maseuropa\Booking\StructType\FAValuedBoatWSDO[]|null
     */
    public function getBoats()
    {
        return $this->boats;
    }
    /**
     * This method is responsible for validating the values passed to the setBoats method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBoats method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBoatsForArrayConstraintsFromSetBoats(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fARetvalFindBoatWSDOBoatsItem) {
            // validation for constraint: itemType
            if (!$fARetvalFindBoatWSDOBoatsItem instanceof \Maseuropa\Booking\StructType\FAValuedBoatWSDO) {
                $invalidValues[] = is_object($fARetvalFindBoatWSDOBoatsItem) ? get_class($fARetvalFindBoatWSDOBoatsItem) : sprintf('%s(%s)', gettype($fARetvalFindBoatWSDOBoatsItem), var_export($fARetvalFindBoatWSDOBoatsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The boats property can only contain items of type \Maseuropa\Booking\StructType\FAValuedBoatWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set boats value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAValuedBoatWSDO[] $boats
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setBoats(array $boats = array())
    {
        // validation for constraint: array
        if ('' !== ($boatsArrayErrorMessage = self::validateBoatsForArrayConstraintsFromSetBoats($boats))) {
            throw new \InvalidArgumentException($boatsArrayErrorMessage, __LINE__);
        }
        $this->boats = $boats;
        return $this;
    }
    /**
     * Add item to boats value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAValuedBoatWSDO $item
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function addToBoats(\Maseuropa\Booking\StructType\FAValuedBoatWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FAValuedBoatWSDO) {
            throw new \InvalidArgumentException(sprintf('The boats property can only contain items of type \Maseuropa\Booking\StructType\FAValuedBoatWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->boats[] = $item;
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
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
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get num_days value
     * @return int|null
     */
    public function getNum_days()
    {
        return $this->num_days;
    }
    /**
     * Set num_days value
     * @param int $num_days
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setNum_days($num_days = null)
    {
        // validation for constraint: int
        if (!is_null($num_days) && !(is_int($num_days) || ctype_digit($num_days))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_days, true), gettype($num_days)), __LINE__);
        }
        $this->num_days = $num_days;
        return $this;
    }
    /**
     * Get id_boat value
     * @return int|null
     */
    public function getId_boat()
    {
        return $this->id_boat;
    }
    /**
     * Set id_boat value
     * @param int $id_boat
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setId_boat($id_boat = null)
    {
        // validation for constraint: int
        if (!is_null($id_boat) && !(is_int($id_boat) || ctype_digit($id_boat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id_boat, true), gettype($id_boat)), __LINE__);
        }
        $this->id_boat = $id_boat;
        return $this;
    }
    /**
     * Get num_cabin value
     * @return int|null
     */
    public function getNum_cabin()
    {
        return $this->num_cabin;
    }
    /**
     * Set num_cabin value
     * @param int $num_cabin
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setNum_cabin($num_cabin = null)
    {
        // validation for constraint: int
        if (!is_null($num_cabin) && !(is_int($num_cabin) || ctype_digit($num_cabin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_cabin, true), gettype($num_cabin)), __LINE__);
        }
        $this->num_cabin = $num_cabin;
        return $this;
    }
    /**
     * Get num_cabin_min value
     * @return int|null
     */
    public function getNum_cabin_min()
    {
        return $this->num_cabin_min;
    }
    /**
     * Set num_cabin_min value
     * @param int $num_cabin_min
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setNum_cabin_min($num_cabin_min = null)
    {
        // validation for constraint: int
        if (!is_null($num_cabin_min) && !(is_int($num_cabin_min) || ctype_digit($num_cabin_min))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_cabin_min, true), gettype($num_cabin_min)), __LINE__);
        }
        $this->num_cabin_min = $num_cabin_min;
        return $this;
    }
    /**
     * Get num_cabin_max value
     * @return int|null
     */
    public function getNum_cabin_max()
    {
        return $this->num_cabin_max;
    }
    /**
     * Set num_cabin_max value
     * @param int $num_cabin_max
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setNum_cabin_max($num_cabin_max = null)
    {
        // validation for constraint: int
        if (!is_null($num_cabin_max) && !(is_int($num_cabin_max) || ctype_digit($num_cabin_max))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_cabin_max, true), gettype($num_cabin_max)), __LINE__);
        }
        $this->num_cabin_max = $num_cabin_max;
        return $this;
    }
    /**
     * Get constr_year value
     * @return int|null
     */
    public function getConstr_year()
    {
        return $this->constr_year;
    }
    /**
     * Set constr_year value
     * @param int $constr_year
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setConstr_year($constr_year = null)
    {
        // validation for constraint: int
        if (!is_null($constr_year) && !(is_int($constr_year) || ctype_digit($constr_year))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($constr_year, true), gettype($constr_year)), __LINE__);
        }
        $this->constr_year = $constr_year;
        return $this;
    }
    /**
     * Get constr_year_min value
     * @return int|null
     */
    public function getConstr_year_min()
    {
        return $this->constr_year_min;
    }
    /**
     * Set constr_year_min value
     * @param int $constr_year_min
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setConstr_year_min($constr_year_min = null)
    {
        // validation for constraint: int
        if (!is_null($constr_year_min) && !(is_int($constr_year_min) || ctype_digit($constr_year_min))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($constr_year_min, true), gettype($constr_year_min)), __LINE__);
        }
        $this->constr_year_min = $constr_year_min;
        return $this;
    }
    /**
     * Get constr_year_max value
     * @return int|null
     */
    public function getConstr_year_max()
    {
        return $this->constr_year_max;
    }
    /**
     * Set constr_year_max value
     * @param int $constr_year_max
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setConstr_year_max($constr_year_max = null)
    {
        // validation for constraint: int
        if (!is_null($constr_year_max) && !(is_int($constr_year_max) || ctype_digit($constr_year_max))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($constr_year_max, true), gettype($constr_year_max)), __LINE__);
        }
        $this->constr_year_max = $constr_year_max;
        return $this;
    }
    /**
     * Get boat_type value
     * @return string|null
     */
    public function getBoat_type()
    {
        return $this->boat_type;
    }
    /**
     * Set boat_type value
     * @param string $boat_type
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setBoat_type($boat_type = null)
    {
        // validation for constraint: string
        if (!is_null($boat_type) && !is_string($boat_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($boat_type, true), gettype($boat_type)), __LINE__);
        }
        $this->boat_type = $boat_type;
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
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
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
     * Get long_min value
     * @return int|null
     */
    public function getLong_min()
    {
        return $this->long_min;
    }
    /**
     * Set long_min value
     * @param int $long_min
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setLong_min($long_min = null)
    {
        // validation for constraint: int
        if (!is_null($long_min) && !(is_int($long_min) || ctype_digit($long_min))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($long_min, true), gettype($long_min)), __LINE__);
        }
        $this->long_min = $long_min;
        return $this;
    }
    /**
     * Get long_max value
     * @return int|null
     */
    public function getLong_max()
    {
        return $this->long_max;
    }
    /**
     * Set long_max value
     * @param int $long_max
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setLong_max($long_max = null)
    {
        // validation for constraint: int
        if (!is_null($long_max) && !(is_int($long_max) || ctype_digit($long_max))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($long_max, true), gettype($long_max)), __LINE__);
        }
        $this->long_max = $long_max;
        return $this;
    }
    /**
     * Get occupation_boat value
     * @return \Maseuropa\Booking\StructType\FAParamOccupationBoatWS|null
     */
    public function getOccupation_boat()
    {
        return $this->occupation_boat;
    }
    /**
     * Set occupation_boat value
     * @param \Maseuropa\Booking\StructType\FAParamOccupationBoatWS $occupation_boat
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setOccupation_boat(\Maseuropa\Booking\StructType\FAParamOccupationBoatWS $occupation_boat = null)
    {
        $this->occupation_boat = $occupation_boat;
        return $this;
    }
    /**
     * Get cabin value
     * @return \Maseuropa\Booking\StructType\FAParamCabinWS[]|null
     */
    public function getCabin()
    {
        return $this->cabin;
    }
    /**
     * This method is responsible for validating the values passed to the setCabin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCabin method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCabinForArrayConstraintsFromSetCabin(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fARetvalFindBoatWSDOCabinItem) {
            // validation for constraint: itemType
            if (!$fARetvalFindBoatWSDOCabinItem instanceof \Maseuropa\Booking\StructType\FAParamCabinWS) {
                $invalidValues[] = is_object($fARetvalFindBoatWSDOCabinItem) ? get_class($fARetvalFindBoatWSDOCabinItem) : sprintf('%s(%s)', gettype($fARetvalFindBoatWSDOCabinItem), var_export($fARetvalFindBoatWSDOCabinItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cabin property can only contain items of type \Maseuropa\Booking\StructType\FAParamCabinWS, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set cabin value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAParamCabinWS[] $cabin
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function setCabin(array $cabin = array())
    {
        // validation for constraint: array
        if ('' !== ($cabinArrayErrorMessage = self::validateCabinForArrayConstraintsFromSetCabin($cabin))) {
            throw new \InvalidArgumentException($cabinArrayErrorMessage, __LINE__);
        }
        $this->cabin = $cabin;
        return $this;
    }
    /**
     * Add item to cabin value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAParamCabinWS $item
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
     */
    public function addToCabin(\Maseuropa\Booking\StructType\FAParamCabinWS $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FAParamCabinWS) {
            throw new \InvalidArgumentException(sprintf('The cabin property can only contain items of type \Maseuropa\Booking\StructType\FAParamCabinWS, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cabin[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FARetvalFindBoatWSDO
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
