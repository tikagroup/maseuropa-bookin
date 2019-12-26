<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SARetvalSelectBoatWSDO StructType
 * @subpackage Structs
 */
class SARetvalSelectBoatWSDO extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The status_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $status_id;
    /**
     * The locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $locator;
    /**
     * The supplier_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_name;
    /**
     * The supplier_category
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_category;
    /**
     * The supplier_description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_description;
    /**
     * The supplier_address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_address;
    /**
     * The supplier_city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_city;
    /**
     * The supplier_province
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_province;
    /**
     * The supplier_country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_country;
    /**
     * The supplier_phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_phone;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $amount;
    /**
     * The cancellation_fees
     * Meta information extracted from the WSDL
     * - arrayType: tns:SACancellationFeeWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\SACancellationFeeWSDO[]
     */
    public $cancellation_fees;
    /**
     * The notes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $notes;
    /**
     * The booking_locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $booking_locator;
    /**
     * The mandatory_information
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mandatory_information;
    /**
     * The tpv_amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tpv_amount;
    /**
     * Constructor method for SARetvalSelectBoatWSDO
     * @uses SARetvalSelectBoatWSDO::setStatus()
     * @uses SARetvalSelectBoatWSDO::setStatus_id()
     * @uses SARetvalSelectBoatWSDO::setLocator()
     * @uses SARetvalSelectBoatWSDO::setSupplier_name()
     * @uses SARetvalSelectBoatWSDO::setSupplier_category()
     * @uses SARetvalSelectBoatWSDO::setSupplier_description()
     * @uses SARetvalSelectBoatWSDO::setSupplier_address()
     * @uses SARetvalSelectBoatWSDO::setSupplier_city()
     * @uses SARetvalSelectBoatWSDO::setSupplier_province()
     * @uses SARetvalSelectBoatWSDO::setSupplier_country()
     * @uses SARetvalSelectBoatWSDO::setSupplier_phone()
     * @uses SARetvalSelectBoatWSDO::setAmount()
     * @uses SARetvalSelectBoatWSDO::setCancellation_fees()
     * @uses SARetvalSelectBoatWSDO::setNotes()
     * @uses SARetvalSelectBoatWSDO::setBooking_locator()
     * @uses SARetvalSelectBoatWSDO::setMandatory_information()
     * @uses SARetvalSelectBoatWSDO::setTpv_amount()
     * @param string $status
     * @param int $status_id
     * @param string $locator
     * @param string $supplier_name
     * @param string $supplier_category
     * @param string $supplier_description
     * @param string $supplier_address
     * @param string $supplier_city
     * @param string $supplier_province
     * @param string $supplier_country
     * @param string $supplier_phone
     * @param string $amount
     * @param \Maseuropa\Booking\StructType\SACancellationFeeWSDO[] $cancellation_fees
     * @param string $notes
     * @param string $booking_locator
     * @param string $mandatory_information
     * @param string $tpv_amount
     */
    public function __construct($status = null, $status_id = null, $locator = null, $supplier_name = null, $supplier_category = null, $supplier_description = null, $supplier_address = null, $supplier_city = null, $supplier_province = null, $supplier_country = null, $supplier_phone = null, $amount = null, array $cancellation_fees = array(), $notes = null, $booking_locator = null, $mandatory_information = null, $tpv_amount = null)
    {
        $this
            ->setStatus($status)
            ->setStatus_id($status_id)
            ->setLocator($locator)
            ->setSupplier_name($supplier_name)
            ->setSupplier_category($supplier_category)
            ->setSupplier_description($supplier_description)
            ->setSupplier_address($supplier_address)
            ->setSupplier_city($supplier_city)
            ->setSupplier_province($supplier_province)
            ->setSupplier_country($supplier_country)
            ->setSupplier_phone($supplier_phone)
            ->setAmount($amount)
            ->setCancellation_fees($cancellation_fees)
            ->setNotes($notes)
            ->setBooking_locator($booking_locator)
            ->setMandatory_information($mandatory_information)
            ->setTpv_amount($tpv_amount);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get status_id value
     * @return int|null
     */
    public function getStatus_id()
    {
        return $this->status_id;
    }
    /**
     * Set status_id value
     * @param int $status_id
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setStatus_id($status_id = null)
    {
        // validation for constraint: int
        if (!is_null($status_id) && !(is_int($status_id) || ctype_digit($status_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status_id, true), gettype($status_id)), __LINE__);
        }
        $this->status_id = $status_id;
        return $this;
    }
    /**
     * Get locator value
     * @return string|null
     */
    public function getLocator()
    {
        return $this->locator;
    }
    /**
     * Set locator value
     * @param string $locator
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setLocator($locator = null)
    {
        // validation for constraint: string
        if (!is_null($locator) && !is_string($locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locator, true), gettype($locator)), __LINE__);
        }
        $this->locator = $locator;
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
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
     * Get supplier_category value
     * @return string|null
     */
    public function getSupplier_category()
    {
        return $this->supplier_category;
    }
    /**
     * Set supplier_category value
     * @param string $supplier_category
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setSupplier_category($supplier_category = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_category) && !is_string($supplier_category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_category, true), gettype($supplier_category)), __LINE__);
        }
        $this->supplier_category = $supplier_category;
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
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
     * Get supplier_city value
     * @return string|null
     */
    public function getSupplier_city()
    {
        return $this->supplier_city;
    }
    /**
     * Set supplier_city value
     * @param string $supplier_city
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setSupplier_city($supplier_city = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_city) && !is_string($supplier_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_city, true), gettype($supplier_city)), __LINE__);
        }
        $this->supplier_city = $supplier_city;
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
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
     * Get supplier_country value
     * @return string|null
     */
    public function getSupplier_country()
    {
        return $this->supplier_country;
    }
    /**
     * Set supplier_country value
     * @param string $supplier_country
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setSupplier_country($supplier_country = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_country) && !is_string($supplier_country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_country, true), gettype($supplier_country)), __LINE__);
        }
        $this->supplier_country = $supplier_country;
        return $this;
    }
    /**
     * Get supplier_phone value
     * @return string|null
     */
    public function getSupplier_phone()
    {
        return $this->supplier_phone;
    }
    /**
     * Set supplier_phone value
     * @param string $supplier_phone
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setSupplier_phone($supplier_phone = null)
    {
        // validation for constraint: string
        if (!is_null($supplier_phone) && !is_string($supplier_phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_phone, true), gettype($supplier_phone)), __LINE__);
        }
        $this->supplier_phone = $supplier_phone;
        return $this;
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get cancellation_fees value
     * @return \Maseuropa\Booking\StructType\SACancellationFeeWSDO[]|null
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
        foreach ($values as $sARetvalSelectBoatWSDOCancellation_feesItem) {
            // validation for constraint: itemType
            if (!$sARetvalSelectBoatWSDOCancellation_feesItem instanceof \Maseuropa\Booking\StructType\SACancellationFeeWSDO) {
                $invalidValues[] = is_object($sARetvalSelectBoatWSDOCancellation_feesItem) ? get_class($sARetvalSelectBoatWSDOCancellation_feesItem) : sprintf('%s(%s)', gettype($sARetvalSelectBoatWSDOCancellation_feesItem), var_export($sARetvalSelectBoatWSDOCancellation_feesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cancellation_fees property can only contain items of type \Maseuropa\Booking\StructType\SACancellationFeeWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set cancellation_fees value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SACancellationFeeWSDO[] $cancellation_fees
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
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
     * @param \Maseuropa\Booking\StructType\SACancellationFeeWSDO $item
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function addToCancellation_fees(\Maseuropa\Booking\StructType\SACancellationFeeWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\SACancellationFeeWSDO) {
            throw new \InvalidArgumentException(sprintf('The cancellation_fees property can only contain items of type \Maseuropa\Booking\StructType\SACancellationFeeWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cancellation_fees[] = $item;
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
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
     * Get booking_locator value
     * @return string|null
     */
    public function getBooking_locator()
    {
        return $this->booking_locator;
    }
    /**
     * Set booking_locator value
     * @param string $booking_locator
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setBooking_locator($booking_locator = null)
    {
        // validation for constraint: string
        if (!is_null($booking_locator) && !is_string($booking_locator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_locator, true), gettype($booking_locator)), __LINE__);
        }
        $this->booking_locator = $booking_locator;
        return $this;
    }
    /**
     * Get mandatory_information value
     * @return string|null
     */
    public function getMandatory_information()
    {
        return $this->mandatory_information;
    }
    /**
     * Set mandatory_information value
     * @param string $mandatory_information
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setMandatory_information($mandatory_information = null)
    {
        // validation for constraint: string
        if (!is_null($mandatory_information) && !is_string($mandatory_information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandatory_information, true), gettype($mandatory_information)), __LINE__);
        }
        $this->mandatory_information = $mandatory_information;
        return $this;
    }
    /**
     * Get tpv_amount value
     * @return string|null
     */
    public function getTpv_amount()
    {
        return $this->tpv_amount;
    }
    /**
     * Set tpv_amount value
     * @param string $tpv_amount
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
     */
    public function setTpv_amount($tpv_amount = null)
    {
        // validation for constraint: string
        if (!is_null($tpv_amount) && !is_string($tpv_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tpv_amount, true), gettype($tpv_amount)), __LINE__);
        }
        $this->tpv_amount = $tpv_amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SARetvalSelectBoatWSDO
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
