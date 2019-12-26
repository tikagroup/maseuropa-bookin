<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAParamOccupationsTransferDataWSDO StructType
 * @subpackage Structs
 */
class SAParamOccupationsTransferDataWSDO extends AbstractStructBase
{
    /**
     * The num_occupation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $num_occupation;
    /**
     * The article_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_id;
    /**
     * The article_class_type_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $article_class_type_id;
    /**
     * The entry_date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $entry_date;
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
     * The origin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $origin;
    /**
     * The origin_data_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $origin_data_type;
    /**
     * The destiny
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destiny;
    /**
     * The destiny_data_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $destiny_data_type;
    /**
     * The flight_time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $flight_time;
    /**
     * The notes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $notes;
    /**
     * Constructor method for SAParamOccupationsTransferDataWSDO
     * @uses SAParamOccupationsTransferDataWSDO::setNum_occupation()
     * @uses SAParamOccupationsTransferDataWSDO::setArticle_id()
     * @uses SAParamOccupationsTransferDataWSDO::setArticle_class_type_id()
     * @uses SAParamOccupationsTransferDataWSDO::setEntry_date()
     * @uses SAParamOccupationsTransferDataWSDO::setNum_adults()
     * @uses SAParamOccupationsTransferDataWSDO::setNum_children()
     * @uses SAParamOccupationsTransferDataWSDO::setAge_children()
     * @uses SAParamOccupationsTransferDataWSDO::setPrice()
     * @uses SAParamOccupationsTransferDataWSDO::setSupplements()
     * @uses SAParamOccupationsTransferDataWSDO::setPaxes()
     * @uses SAParamOccupationsTransferDataWSDO::setOrigin()
     * @uses SAParamOccupationsTransferDataWSDO::setOrigin_data_type()
     * @uses SAParamOccupationsTransferDataWSDO::setDestiny()
     * @uses SAParamOccupationsTransferDataWSDO::setDestiny_data_type()
     * @uses SAParamOccupationsTransferDataWSDO::setFlight_time()
     * @uses SAParamOccupationsTransferDataWSDO::setNotes()
     * @param string $num_occupation
     * @param int $article_id
     * @param int $article_class_type_id
     * @param string $entry_date
     * @param int $num_adults
     * @param int $num_children
     * @param string $age_children
     * @param string $price
     * @param \Maseuropa\Booking\StructType\SAParamSupplement[] $supplements
     * @param \Maseuropa\Booking\StructType\SAParamPaxWSDO[] $paxes
     * @param string $origin
     * @param string $origin_data_type
     * @param string $destiny
     * @param string $destiny_data_type
     * @param string $flight_time
     * @param string $notes
     */
    public function __construct($num_occupation = null, $article_id = null, $article_class_type_id = null, $entry_date = null, $num_adults = null, $num_children = null, $age_children = null, $price = null, array $supplements = array(), array $paxes = array(), $origin = null, $origin_data_type = null, $destiny = null, $destiny_data_type = null, $flight_time = null, $notes = null)
    {
        $this
            ->setNum_occupation($num_occupation)
            ->setArticle_id($article_id)
            ->setArticle_class_type_id($article_class_type_id)
            ->setEntry_date($entry_date)
            ->setNum_adults($num_adults)
            ->setNum_children($num_children)
            ->setAge_children($age_children)
            ->setPrice($price)
            ->setSupplements($supplements)
            ->setPaxes($paxes)
            ->setOrigin($origin)
            ->setOrigin_data_type($origin_data_type)
            ->setDestiny($destiny)
            ->setDestiny_data_type($destiny_data_type)
            ->setFlight_time($flight_time)
            ->setNotes($notes);
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
        foreach ($values as $sAParamOccupationsTransferDataWSDOSupplementsItem) {
            // validation for constraint: itemType
            if (!$sAParamOccupationsTransferDataWSDOSupplementsItem instanceof \Maseuropa\Booking\StructType\SAParamSupplement) {
                $invalidValues[] = is_object($sAParamOccupationsTransferDataWSDOSupplementsItem) ? get_class($sAParamOccupationsTransferDataWSDOSupplementsItem) : sprintf('%s(%s)', gettype($sAParamOccupationsTransferDataWSDOSupplementsItem), var_export($sAParamOccupationsTransferDataWSDOSupplementsItem, true));
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
        foreach ($values as $sAParamOccupationsTransferDataWSDOPaxesItem) {
            // validation for constraint: itemType
            if (!$sAParamOccupationsTransferDataWSDOPaxesItem instanceof \Maseuropa\Booking\StructType\SAParamPaxWSDO) {
                $invalidValues[] = is_object($sAParamOccupationsTransferDataWSDOPaxesItem) ? get_class($sAParamOccupationsTransferDataWSDOPaxesItem) : sprintf('%s(%s)', gettype($sAParamOccupationsTransferDataWSDOPaxesItem), var_export($sAParamOccupationsTransferDataWSDOPaxesItem, true));
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
     * Get origin value
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param string $origin
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        return $this;
    }
    /**
     * Get origin_data_type value
     * @return string|null
     */
    public function getOrigin_data_type()
    {
        return $this->origin_data_type;
    }
    /**
     * Set origin_data_type value
     * @param string $origin_data_type
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
     */
    public function setOrigin_data_type($origin_data_type = null)
    {
        // validation for constraint: string
        if (!is_null($origin_data_type) && !is_string($origin_data_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin_data_type, true), gettype($origin_data_type)), __LINE__);
        }
        $this->origin_data_type = $origin_data_type;
        return $this;
    }
    /**
     * Get destiny value
     * @return string|null
     */
    public function getDestiny()
    {
        return $this->destiny;
    }
    /**
     * Set destiny value
     * @param string $destiny
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
     */
    public function setDestiny($destiny = null)
    {
        // validation for constraint: string
        if (!is_null($destiny) && !is_string($destiny)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destiny, true), gettype($destiny)), __LINE__);
        }
        $this->destiny = $destiny;
        return $this;
    }
    /**
     * Get destiny_data_type value
     * @return string|null
     */
    public function getDestiny_data_type()
    {
        return $this->destiny_data_type;
    }
    /**
     * Set destiny_data_type value
     * @param string $destiny_data_type
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
     */
    public function setDestiny_data_type($destiny_data_type = null)
    {
        // validation for constraint: string
        if (!is_null($destiny_data_type) && !is_string($destiny_data_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destiny_data_type, true), gettype($destiny_data_type)), __LINE__);
        }
        $this->destiny_data_type = $destiny_data_type;
        return $this;
    }
    /**
     * Get flight_time value
     * @return string|null
     */
    public function getFlight_time()
    {
        return $this->flight_time;
    }
    /**
     * Set flight_time value
     * @param string $flight_time
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
     */
    public function setFlight_time($flight_time = null)
    {
        // validation for constraint: string
        if (!is_null($flight_time) && !is_string($flight_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flight_time, true), gettype($flight_time)), __LINE__);
        }
        $this->flight_time = $flight_time;
        return $this;
    }
    /**
     * Get notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
     * Set notes value
     * @param string $notes
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->notes = $notes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAParamOccupationsTransferDataWSDO
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
