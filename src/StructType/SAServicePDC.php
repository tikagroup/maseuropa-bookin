<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SAServicePDC StructType
 * @subpackage Structs
 */
class SAServicePDC extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The supplier_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $supplier_name;
    /**
     * The begin_date_service
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $begin_date_service;
    /**
     * The end_date_service
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $end_date_service;
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
     * Constructor method for SAServicePDC
     * @uses SAServicePDC::setName()
     * @uses SAServicePDC::setSupplier_name()
     * @uses SAServicePDC::setBegin_date_service()
     * @uses SAServicePDC::setEnd_date_service()
     * @uses SAServicePDC::setCancellation_fees()
     * @param string $name
     * @param string $supplier_name
     * @param string $begin_date_service
     * @param string $end_date_service
     * @param \Maseuropa\Booking\StructType\SACancellationFeeWSDO[] $cancellation_fees
     */
    public function __construct($name = null, $supplier_name = null, $begin_date_service = null, $end_date_service = null, array $cancellation_fees = array())
    {
        $this
            ->setName($name)
            ->setSupplier_name($supplier_name)
            ->setBegin_date_service($begin_date_service)
            ->setEnd_date_service($end_date_service)
            ->setCancellation_fees($cancellation_fees);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Maseuropa\Booking\StructType\SAServicePDC
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
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
     * @return \Maseuropa\Booking\StructType\SAServicePDC
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
     * Get begin_date_service value
     * @return string|null
     */
    public function getBegin_date_service()
    {
        return $this->begin_date_service;
    }
    /**
     * Set begin_date_service value
     * @param string $begin_date_service
     * @return \Maseuropa\Booking\StructType\SAServicePDC
     */
    public function setBegin_date_service($begin_date_service = null)
    {
        // validation for constraint: string
        if (!is_null($begin_date_service) && !is_string($begin_date_service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($begin_date_service, true), gettype($begin_date_service)), __LINE__);
        }
        $this->begin_date_service = $begin_date_service;
        return $this;
    }
    /**
     * Get end_date_service value
     * @return string|null
     */
    public function getEnd_date_service()
    {
        return $this->end_date_service;
    }
    /**
     * Set end_date_service value
     * @param string $end_date_service
     * @return \Maseuropa\Booking\StructType\SAServicePDC
     */
    public function setEnd_date_service($end_date_service = null)
    {
        // validation for constraint: string
        if (!is_null($end_date_service) && !is_string($end_date_service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_date_service, true), gettype($end_date_service)), __LINE__);
        }
        $this->end_date_service = $end_date_service;
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
        foreach ($values as $sAServicePDCCancellation_feesItem) {
            // validation for constraint: itemType
            if (!$sAServicePDCCancellation_feesItem instanceof \Maseuropa\Booking\StructType\SACancellationFeeWSDO) {
                $invalidValues[] = is_object($sAServicePDCCancellation_feesItem) ? get_class($sAServicePDCCancellation_feesItem) : sprintf('%s(%s)', gettype($sAServicePDCCancellation_feesItem), var_export($sAServicePDCCancellation_feesItem, true));
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
     * @return \Maseuropa\Booking\StructType\SAServicePDC
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
     * @return \Maseuropa\Booking\StructType\SAServicePDC
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SAServicePDC
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
