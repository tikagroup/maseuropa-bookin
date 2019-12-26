<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SARetvalSelectPDCWSDO StructType
 * @subpackage Structs
 */
class SARetvalSelectPDCWSDO extends AbstractStructBase
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
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $amount;
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
     * The services
     * Meta information extracted from the WSDL
     * - arrayType: tns:SAServicePDC[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\SAServicePDC[]
     */
    public $services;
    /**
     * The tpv_amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tpv_amount;
    /**
     * Constructor method for SARetvalSelectPDCWSDO
     * @uses SARetvalSelectPDCWSDO::setStatus()
     * @uses SARetvalSelectPDCWSDO::setStatus_id()
     * @uses SARetvalSelectPDCWSDO::setLocator()
     * @uses SARetvalSelectPDCWSDO::setAmount()
     * @uses SARetvalSelectPDCWSDO::setNotes()
     * @uses SARetvalSelectPDCWSDO::setBooking_locator()
     * @uses SARetvalSelectPDCWSDO::setServices()
     * @uses SARetvalSelectPDCWSDO::setTpv_amount()
     * @param string $status
     * @param int $status_id
     * @param string $locator
     * @param string $amount
     * @param string $notes
     * @param string $booking_locator
     * @param \Maseuropa\Booking\StructType\SAServicePDC[] $services
     * @param string $tpv_amount
     */
    public function __construct($status = null, $status_id = null, $locator = null, $amount = null, $notes = null, $booking_locator = null, array $services = array(), $tpv_amount = null)
    {
        $this
            ->setStatus($status)
            ->setStatus_id($status_id)
            ->setLocator($locator)
            ->setAmount($amount)
            ->setNotes($notes)
            ->setBooking_locator($booking_locator)
            ->setServices($services)
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
     * Get services value
     * @return \Maseuropa\Booking\StructType\SAServicePDC[]|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * This method is responsible for validating the values passed to the setServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServices method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServicesForArrayConstraintsFromSetServices(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sARetvalSelectPDCWSDOServicesItem) {
            // validation for constraint: itemType
            if (!$sARetvalSelectPDCWSDOServicesItem instanceof \Maseuropa\Booking\StructType\SAServicePDC) {
                $invalidValues[] = is_object($sARetvalSelectPDCWSDOServicesItem) ? get_class($sARetvalSelectPDCWSDOServicesItem) : sprintf('%s(%s)', gettype($sARetvalSelectPDCWSDOServicesItem), var_export($sARetvalSelectPDCWSDOServicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The services property can only contain items of type \Maseuropa\Booking\StructType\SAServicePDC, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set services value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SAServicePDC[] $services
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
     */
    public function setServices(array $services = array())
    {
        // validation for constraint: array
        if ('' !== ($servicesArrayErrorMessage = self::validateServicesForArrayConstraintsFromSetServices($services))) {
            throw new \InvalidArgumentException($servicesArrayErrorMessage, __LINE__);
        }
        $this->services = $services;
        return $this;
    }
    /**
     * Add item to services value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\SAServicePDC $item
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
     */
    public function addToServices(\Maseuropa\Booking\StructType\SAServicePDC $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\SAServicePDC) {
            throw new \InvalidArgumentException(sprintf('The services property can only contain items of type \Maseuropa\Booking\StructType\SAServicePDC, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->services[] = $item;
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectPDCWSDO
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
