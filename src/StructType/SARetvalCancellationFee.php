<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SARetvalCancellationFee StructType
 * @subpackage Structs
 */
class SARetvalCancellationFee extends AbstractStructBase
{
    /**
     * The cancellation_fees
     * Meta information extracted from the WSDL
     * - arrayType: tns:CFDefinitionCancellationCostWSDO[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO[]
     */
    public $cancellation_fees;
    /**
     * The mandatory_information
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mandatory_information;
    /**
     * Constructor method for SARetvalCancellationFee
     * @uses SARetvalCancellationFee::setCancellation_fees()
     * @uses SARetvalCancellationFee::setMandatory_information()
     * @param \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO[] $cancellation_fees
     * @param string $mandatory_information
     */
    public function __construct(array $cancellation_fees = array(), $mandatory_information = null)
    {
        $this
            ->setCancellation_fees($cancellation_fees)
            ->setMandatory_information($mandatory_information);
    }
    /**
     * Get cancellation_fees value
     * @return \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO[]|null
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
        foreach ($values as $sARetvalCancellationFeeCancellation_feesItem) {
            // validation for constraint: itemType
            if (!$sARetvalCancellationFeeCancellation_feesItem instanceof \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO) {
                $invalidValues[] = is_object($sARetvalCancellationFeeCancellation_feesItem) ? get_class($sARetvalCancellationFeeCancellation_feesItem) : sprintf('%s(%s)', gettype($sARetvalCancellationFeeCancellation_feesItem), var_export($sARetvalCancellationFeeCancellation_feesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cancellation_fees property can only contain items of type \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set cancellation_fees value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO[] $cancellation_fees
     * @return \Maseuropa\Booking\StructType\SARetvalCancellationFee
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
     * @param \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO $item
     * @return \Maseuropa\Booking\StructType\SARetvalCancellationFee
     */
    public function addToCancellation_fees(\Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO) {
            throw new \InvalidArgumentException(sprintf('The cancellation_fees property can only contain items of type \Maseuropa\Booking\StructType\CFDefinitionCancellationCostWSDO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cancellation_fees[] = $item;
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
     * @return \Maseuropa\Booking\StructType\SARetvalCancellationFee
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\SARetvalCancellationFee
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
