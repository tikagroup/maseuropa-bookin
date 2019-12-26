<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FVParamChargeWS StructType
 * @subpackage Structs
 */
class FVParamChargeWS extends AbstractStructBase
{
    /**
     * The authorization_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $authorization_code;
    /**
     * The error_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $error_code;
    /**
     * The error_description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $error_description;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $amount;
    /**
     * The gateway
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $gateway;
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $result;
    /**
     * The transaction_type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $transaction_type;
    /**
     * The transaction_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $transaction_id;
    /**
     * Constructor method for FVParamChargeWS
     * @uses FVParamChargeWS::setAuthorization_code()
     * @uses FVParamChargeWS::setError_code()
     * @uses FVParamChargeWS::setError_description()
     * @uses FVParamChargeWS::setAmount()
     * @uses FVParamChargeWS::setGateway()
     * @uses FVParamChargeWS::setResult()
     * @uses FVParamChargeWS::setTransaction_type()
     * @uses FVParamChargeWS::setTransaction_id()
     * @param string $authorization_code
     * @param string $error_code
     * @param string $error_description
     * @param string $amount
     * @param string $gateway
     * @param string $result
     * @param string $transaction_type
     * @param int $transaction_id
     */
    public function __construct($authorization_code = null, $error_code = null, $error_description = null, $amount = null, $gateway = null, $result = null, $transaction_type = null, $transaction_id = null)
    {
        $this
            ->setAuthorization_code($authorization_code)
            ->setError_code($error_code)
            ->setError_description($error_description)
            ->setAmount($amount)
            ->setGateway($gateway)
            ->setResult($result)
            ->setTransaction_type($transaction_type)
            ->setTransaction_id($transaction_id);
    }
    /**
     * Get authorization_code value
     * @return string|null
     */
    public function getAuthorization_code()
    {
        return $this->authorization_code;
    }
    /**
     * Set authorization_code value
     * @param string $authorization_code
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
     */
    public function setAuthorization_code($authorization_code = null)
    {
        // validation for constraint: string
        if (!is_null($authorization_code) && !is_string($authorization_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorization_code, true), gettype($authorization_code)), __LINE__);
        }
        $this->authorization_code = $authorization_code;
        return $this;
    }
    /**
     * Get error_code value
     * @return string|null
     */
    public function getError_code()
    {
        return $this->error_code;
    }
    /**
     * Set error_code value
     * @param string $error_code
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
     */
    public function setError_code($error_code = null)
    {
        // validation for constraint: string
        if (!is_null($error_code) && !is_string($error_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error_code, true), gettype($error_code)), __LINE__);
        }
        $this->error_code = $error_code;
        return $this;
    }
    /**
     * Get error_description value
     * @return string|null
     */
    public function getError_description()
    {
        return $this->error_description;
    }
    /**
     * Set error_description value
     * @param string $error_description
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
     */
    public function setError_description($error_description = null)
    {
        // validation for constraint: string
        if (!is_null($error_description) && !is_string($error_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error_description, true), gettype($error_description)), __LINE__);
        }
        $this->error_description = $error_description;
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
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
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
     * Get gateway value
     * @return string|null
     */
    public function getGateway()
    {
        return $this->gateway;
    }
    /**
     * Set gateway value
     * @param string $gateway
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
     */
    public function setGateway($gateway = null)
    {
        // validation for constraint: string
        if (!is_null($gateway) && !is_string($gateway)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gateway, true), gettype($gateway)), __LINE__);
        }
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * Get result value
     * @return string|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param string $result
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
     */
    public function setResult($result = null)
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        return $this;
    }
    /**
     * Get transaction_type value
     * @return string|null
     */
    public function getTransaction_type()
    {
        return $this->transaction_type;
    }
    /**
     * Set transaction_type value
     * @param string $transaction_type
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
     */
    public function setTransaction_type($transaction_type = null)
    {
        // validation for constraint: string
        if (!is_null($transaction_type) && !is_string($transaction_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_type, true), gettype($transaction_type)), __LINE__);
        }
        $this->transaction_type = $transaction_type;
        return $this;
    }
    /**
     * Get transaction_id value
     * @return int|null
     */
    public function getTransaction_id()
    {
        return $this->transaction_id;
    }
    /**
     * Set transaction_id value
     * @param int $transaction_id
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
     */
    public function setTransaction_id($transaction_id = null)
    {
        // validation for constraint: int
        if (!is_null($transaction_id) && !(is_int($transaction_id) || ctype_digit($transaction_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transaction_id, true), gettype($transaction_id)), __LINE__);
        }
        $this->transaction_id = $transaction_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FVParamChargeWS
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
