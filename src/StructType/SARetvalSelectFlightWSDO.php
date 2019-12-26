<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SARetvalSelectFlightWSDO StructType
 * @subpackage Structs
 */
class SARetvalSelectFlightWSDO extends AbstractStructBase
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
     * The info_sobrecoste_tarjeta
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $info_sobrecoste_tarjeta;
    /**
     * The low_cost
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $low_cost;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $error;
    /**
     * The tpv_amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tpv_amount;
    /**
     * Constructor method for SARetvalSelectFlightWSDO
     * @uses SARetvalSelectFlightWSDO::setStatus()
     * @uses SARetvalSelectFlightWSDO::setStatus_id()
     * @uses SARetvalSelectFlightWSDO::setLocator()
     * @uses SARetvalSelectFlightWSDO::setAmount()
     * @uses SARetvalSelectFlightWSDO::setInfo_sobrecoste_tarjeta()
     * @uses SARetvalSelectFlightWSDO::setLow_cost()
     * @uses SARetvalSelectFlightWSDO::setError()
     * @uses SARetvalSelectFlightWSDO::setTpv_amount()
     * @param string $status
     * @param int $status_id
     * @param string $locator
     * @param string $amount
     * @param string $info_sobrecoste_tarjeta
     * @param string $low_cost
     * @param string $error
     * @param string $tpv_amount
     */
    public function __construct($status = null, $status_id = null, $locator = null, $amount = null, $info_sobrecoste_tarjeta = null, $low_cost = null, $error = null, $tpv_amount = null)
    {
        $this
            ->setStatus($status)
            ->setStatus_id($status_id)
            ->setLocator($locator)
            ->setAmount($amount)
            ->setInfo_sobrecoste_tarjeta($info_sobrecoste_tarjeta)
            ->setLow_cost($low_cost)
            ->setError($error)
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
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
     * Get info_sobrecoste_tarjeta value
     * @return string|null
     */
    public function getInfo_sobrecoste_tarjeta()
    {
        return $this->info_sobrecoste_tarjeta;
    }
    /**
     * Set info_sobrecoste_tarjeta value
     * @param string $info_sobrecoste_tarjeta
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
     */
    public function setInfo_sobrecoste_tarjeta($info_sobrecoste_tarjeta = null)
    {
        // validation for constraint: string
        if (!is_null($info_sobrecoste_tarjeta) && !is_string($info_sobrecoste_tarjeta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info_sobrecoste_tarjeta, true), gettype($info_sobrecoste_tarjeta)), __LINE__);
        }
        $this->info_sobrecoste_tarjeta = $info_sobrecoste_tarjeta;
        return $this;
    }
    /**
     * Get low_cost value
     * @return string|null
     */
    public function getLow_cost()
    {
        return $this->low_cost;
    }
    /**
     * Set low_cost value
     * @param string $low_cost
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
     */
    public function setLow_cost($low_cost = null)
    {
        // validation for constraint: string
        if (!is_null($low_cost) && !is_string($low_cost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($low_cost, true), gettype($low_cost)), __LINE__);
        }
        $this->low_cost = $low_cost;
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
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
     * @return \Maseuropa\Booking\StructType\SARetvalSelectFlightWSDO
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
