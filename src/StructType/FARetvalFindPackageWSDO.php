<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FARetvalFindPackageWSDO StructType
 * @subpackage Structs
 */
class FARetvalFindPackageWSDO extends AbstractStructBase
{
    /**
     * The pdc_header
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Maseuropa\Booking\StructType\FAPDCHeader
     */
    public $pdc_header;
    /**
     * The threads
     * Meta information extracted from the WSDL
     * - arrayType: tns:FAThread[]
     * - base: soap-enc:Array
     * - nillable: true
     * - ref: soap-enc:arrayType
     * @var \Maseuropa\Booking\StructType\FAThread[]
     */
    public $threads;
    /**
     * Constructor method for FARetvalFindPackageWSDO
     * @uses FARetvalFindPackageWSDO::setPdc_header()
     * @uses FARetvalFindPackageWSDO::setThreads()
     * @param \Maseuropa\Booking\StructType\FAPDCHeader $pdc_header
     * @param \Maseuropa\Booking\StructType\FAThread[] $threads
     */
    public function __construct(\Maseuropa\Booking\StructType\FAPDCHeader $pdc_header = null, array $threads = array())
    {
        $this
            ->setPdc_header($pdc_header)
            ->setThreads($threads);
    }
    /**
     * Get pdc_header value
     * @return \Maseuropa\Booking\StructType\FAPDCHeader|null
     */
    public function getPdc_header()
    {
        return $this->pdc_header;
    }
    /**
     * Set pdc_header value
     * @param \Maseuropa\Booking\StructType\FAPDCHeader $pdc_header
     * @return \Maseuropa\Booking\StructType\FARetvalFindPackageWSDO
     */
    public function setPdc_header(\Maseuropa\Booking\StructType\FAPDCHeader $pdc_header = null)
    {
        $this->pdc_header = $pdc_header;
        return $this;
    }
    /**
     * Get threads value
     * @return \Maseuropa\Booking\StructType\FAThread[]|null
     */
    public function getThreads()
    {
        return $this->threads;
    }
    /**
     * This method is responsible for validating the values passed to the setThreads method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThreads method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThreadsForArrayConstraintsFromSetThreads(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fARetvalFindPackageWSDOThreadsItem) {
            // validation for constraint: itemType
            if (!$fARetvalFindPackageWSDOThreadsItem instanceof \Maseuropa\Booking\StructType\FAThread) {
                $invalidValues[] = is_object($fARetvalFindPackageWSDOThreadsItem) ? get_class($fARetvalFindPackageWSDOThreadsItem) : sprintf('%s(%s)', gettype($fARetvalFindPackageWSDOThreadsItem), var_export($fARetvalFindPackageWSDOThreadsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The threads property can only contain items of type \Maseuropa\Booking\StructType\FAThread, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set threads value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAThread[] $threads
     * @return \Maseuropa\Booking\StructType\FARetvalFindPackageWSDO
     */
    public function setThreads(array $threads = array())
    {
        // validation for constraint: array
        if ('' !== ($threadsArrayErrorMessage = self::validateThreadsForArrayConstraintsFromSetThreads($threads))) {
            throw new \InvalidArgumentException($threadsArrayErrorMessage, __LINE__);
        }
        $this->threads = $threads;
        return $this;
    }
    /**
     * Add item to threads value
     * @throws \InvalidArgumentException
     * @param \Maseuropa\Booking\StructType\FAThread $item
     * @return \Maseuropa\Booking\StructType\FARetvalFindPackageWSDO
     */
    public function addToThreads(\Maseuropa\Booking\StructType\FAThread $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maseuropa\Booking\StructType\FAThread) {
            throw new \InvalidArgumentException(sprintf('The threads property can only contain items of type \Maseuropa\Booking\StructType\FAThread, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->threads[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FARetvalFindPackageWSDO
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
