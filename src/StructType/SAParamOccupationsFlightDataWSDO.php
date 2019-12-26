<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAParamOccupationsFlightDataWSDO StructType
 * @subpackage Structs
 */
class SAParamOccupationsFlightDataWSDO extends AbstractStructBase
{
    /**
     * The num_occupation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
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
     * The departure_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $departure_date;
    /**
     * The return_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $return_date;
    /**
     * The origin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $origin;
    /**
     * The destiny
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $destiny;
    /**
     * The cabin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cabin;
    /**
     * The direct_flights
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $direct_flights;
    /**
     * The request_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $request_code;
    /**
     * The request_search
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $request_search;
    /**
     * The flexible
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $flexible;
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
     * The num_babies
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $num_babies;
    /**
     * The price
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $price;
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
     * Constructor method for SAParamOccupationsFlightDataWSDO
     * @uses SAParamOccupationsFlightDataWSDO::setNum_occupation()
     * @uses SAParamOccupationsFlightDataWSDO::setArticle_class_type_id()
     * @uses SAParamOccupationsFlightDataWSDO::setDeparture_date()
     * @uses SAParamOccupationsFlightDataWSDO::setReturn_date()
     * @uses SAParamOccupationsFlightDataWSDO::setOrigin()
     * @uses SAParamOccupationsFlightDataWSDO::setDestiny()
     * @uses SAParamOccupationsFlightDataWSDO::setCabin()
     * @uses SAParamOccupationsFlightDataWSDO::setDirect_flights()
     * @uses SAParamOccupationsFlightDataWSDO::setRequest_code()
     * @uses SAParamOccupationsFlightDataWSDO::setRequest_search()
     * @uses SAParamOccupationsFlightDataWSDO::setFlexible()
     * @uses SAParamOccupationsFlightDataWSDO::setNum_adults()
     * @uses SAParamOccupationsFlightDataWSDO::setNum_children()
     * @uses SAParamOccupationsFlightDataWSDO::setAge_children()
     * @uses SAParamOccupationsFlightDataWSDO::setNum_babies()
     * @uses SAParamOccupationsFlightDataWSDO::setPrice()
     * @uses SAParamOccupationsFlightDataWSDO::setPaxes()
     * @param int $num_occupation
     * @param int $article_class_type_id
     * @param string $departure_date
     * @param string $return_date
     * @param int $origin
     * @param int $destiny
     * @param string $cabin
     * @param int $direct_flights
     * @param string $request_code
     * @param string $request_search
     * @param string $flexible
     * @param int $num_adults
     * @param int $num_children
     * @param string $age_children
     * @param int $num_babies
     * @param string $price
     * @param \Maseuropa\Booking\StructType\SAParamPaxWSDO[] $paxes
     */
    public function __construct($num_occupation = null, $article_class_type_id = null, $departure_date = null, $return_date = null, $origin = null, $destiny = null, $cabin = null, $direct_flights = null, $request_code = null, $request_search = null, $flexible = null, $num_adults = null, $num_children = null, $age_children = null, $num_babies = null, $price = null, array $paxes = array())
    {
        $this
            ->setNum_occupation($num_occupation)
            ->setArticle_class_type_id($article_class_type_id)
            ->setDeparture_date($departure_date)
            ->setReturn_date($return_date)
            ->setOrigin($origin)
            ->setDestiny($destiny)
            ->setCabin($cabin)
            ->setDirect_flights($direct_flights)
            ->setRequest_code($request_code)
            ->setRequest_search($request_search)
            ->setFlexible($flexible)
            ->setNum_adults($num_adults)
            ->setNum_children($num_children)
            ->setAge_children($age_children)
            ->setNum_babies($num_babies)
            ->setPrice($price)
            ->setPaxes($paxes);
    }
    /**
     * Get num_occupation value
     * @return int|null
     */
    public function getNum_occupation()
    {
        return $this->num_occupation;
    }
    /**
     * Set num_occupation value
     * @param int $num_occupation
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setNum_occupation($num_occupation = null)
    {
        // validation for constraint: int
        if (!is_null($num_occupation) && !(is_int($num_occupation) || ctype_digit($num_occupation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_occupation, true), gettype($num_occupation)), __LINE__);
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
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
     * Get departure_date value
     * @return string|null
     */
    public function getDeparture_date()
    {
        return $this->departure_date;
    }
    /**
     * Set departure_date value
     * @param string $departure_date
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setDeparture_date($departure_date = null)
    {
        // validation for constraint: string
        if (!is_null($departure_date) && !is_string($departure_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_date, true), gettype($departure_date)), __LINE__);
        }
        $this->departure_date = $departure_date;
        return $this;
    }
    /**
     * Get return_date value
     * @return string|null
     */
    public function getReturn_date()
    {
        return $this->return_date;
    }
    /**
     * Set return_date value
     * @param string $return_date
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setReturn_date($return_date = null)
    {
        // validation for constraint: string
        if (!is_null($return_date) && !is_string($return_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_date, true), gettype($return_date)), __LINE__);
        }
        $this->return_date = $return_date;
        return $this;
    }
    /**
     * Get origin value
     * @return int|null
     */
    public function getOrigin()
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param int $origin
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: int
        if (!is_null($origin) && !(is_int($origin) || ctype_digit($origin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        return $this;
    }
    /**
     * Get destiny value
     * @return int|null
     */
    public function getDestiny()
    {
        return $this->destiny;
    }
    /**
     * Set destiny value
     * @param int $destiny
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setDestiny($destiny = null)
    {
        // validation for constraint: int
        if (!is_null($destiny) && !(is_int($destiny) || ctype_digit($destiny))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destiny, true), gettype($destiny)), __LINE__);
        }
        $this->destiny = $destiny;
        return $this;
    }
    /**
     * Get cabin value
     * @return string|null
     */
    public function getCabin()
    {
        return $this->cabin;
    }
    /**
     * Set cabin value
     * @param string $cabin
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setCabin($cabin = null)
    {
        // validation for constraint: string
        if (!is_null($cabin) && !is_string($cabin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabin, true), gettype($cabin)), __LINE__);
        }
        $this->cabin = $cabin;
        return $this;
    }
    /**
     * Get direct_flights value
     * @return int|null
     */
    public function getDirect_flights()
    {
        return $this->direct_flights;
    }
    /**
     * Set direct_flights value
     * @param int $direct_flights
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setDirect_flights($direct_flights = null)
    {
        // validation for constraint: int
        if (!is_null($direct_flights) && !(is_int($direct_flights) || ctype_digit($direct_flights))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($direct_flights, true), gettype($direct_flights)), __LINE__);
        }
        $this->direct_flights = $direct_flights;
        return $this;
    }
    /**
     * Get request_code value
     * @return string|null
     */
    public function getRequest_code()
    {
        return $this->request_code;
    }
    /**
     * Set request_code value
     * @param string $request_code
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setRequest_code($request_code = null)
    {
        // validation for constraint: string
        if (!is_null($request_code) && !is_string($request_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($request_code, true), gettype($request_code)), __LINE__);
        }
        $this->request_code = $request_code;
        return $this;
    }
    /**
     * Get request_search value
     * @return string|null
     */
    public function getRequest_search()
    {
        return $this->request_search;
    }
    /**
     * Set request_search value
     * @param string $request_search
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setRequest_search($request_search = null)
    {
        // validation for constraint: string
        if (!is_null($request_search) && !is_string($request_search)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($request_search, true), gettype($request_search)), __LINE__);
        }
        $this->request_search = $request_search;
        return $this;
    }
    /**
     * Get flexible value
     * @return string|null
     */
    public function getFlexible()
    {
        return $this->flexible;
    }
    /**
     * Set flexible value
     * @param string $flexible
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setFlexible($flexible = null)
    {
        // validation for constraint: string
        if (!is_null($flexible) && !is_string($flexible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flexible, true), gettype($flexible)), __LINE__);
        }
        $this->flexible = $flexible;
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
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
     * Get num_babies value
     * @return int|null
     */
    public function getNum_babies()
    {
        return $this->num_babies;
    }
    /**
     * Set num_babies value
     * @param int $num_babies
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
     */
    public function setNum_babies($num_babies = null)
    {
        // validation for constraint: int
        if (!is_null($num_babies) && !(is_int($num_babies) || ctype_digit($num_babies))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($num_babies, true), gettype($num_babies)), __LINE__);
        }
        $this->num_babies = $num_babies;
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
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
        foreach ($values as $sAParamOccupationsFlightDataWSDOPaxesItem) {
            // validation for constraint: itemType
            if (!$sAParamOccupationsFlightDataWSDOPaxesItem instanceof \Maseuropa\Booking\StructType\SAParamPaxWSDO) {
                $invalidValues[] = is_object($sAParamOccupationsFlightDataWSDOPaxesItem) ? get_class($sAParamOccupationsFlightDataWSDOPaxesItem) : sprintf('%s(%s)', gettype($sAParamOccupationsFlightDataWSDOPaxesItem), var_export($sAParamOccupationsFlightDataWSDOPaxesItem, true));
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsFlightDataWSDO
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
