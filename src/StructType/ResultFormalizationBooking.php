<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResultFormalizationBooking StructType
 * @subpackage Structs
 */
class ResultFormalizationBooking extends AbstractStructBase
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
     * The booking_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $booking_id;
    /**
     * The locator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $locator;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The link_pdf
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $link_pdf;
    /**
     * The link_proforma
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $link_proforma;
    /**
     * The bookings_central
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bookings_central;
    /**
     * The external_reference
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $external_reference;
    /**
     * The amadeus_issuance
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $amadeus_issuance;
    /**
     * The issued_tickets
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Array
     */
    public $issued_tickets;
    /**
     * Constructor method for ResultFormalizationBooking
     * @uses ResultFormalizationBooking::setStatus()
     * @uses ResultFormalizationBooking::setStatus_id()
     * @uses ResultFormalizationBooking::setBooking_id()
     * @uses ResultFormalizationBooking::setLocator()
     * @uses ResultFormalizationBooking::setDescription()
     * @uses ResultFormalizationBooking::setLink_pdf()
     * @uses ResultFormalizationBooking::setLink_proforma()
     * @uses ResultFormalizationBooking::setBookings_central()
     * @uses ResultFormalizationBooking::setExternal_reference()
     * @uses ResultFormalizationBooking::setAmadeus_issuance()
     * @uses ResultFormalizationBooking::setIssued_tickets()
     * @param string $status
     * @param int $status_id
     * @param int $booking_id
     * @param string $locator
     * @param string $description
     * @param string $link_pdf
     * @param string $link_proforma
     * @param string $bookings_central
     * @param string $external_reference
     * @param int $amadeus_issuance
     * @param Array $issued_tickets
     */
    public function __construct($status = null, $status_id = null, $booking_id = null, $locator = null, $description = null, $link_pdf = null, $link_proforma = null, $bookings_central = null, $external_reference = null, $amadeus_issuance = null, Array $issued_tickets = null)
    {
        $this
            ->setStatus($status)
            ->setStatus_id($status_id)
            ->setBooking_id($booking_id)
            ->setLocator($locator)
            ->setDescription($description)
            ->setLink_pdf($link_pdf)
            ->setLink_proforma($link_proforma)
            ->setBookings_central($bookings_central)
            ->setExternal_reference($external_reference)
            ->setAmadeus_issuance($amadeus_issuance)
            ->setIssued_tickets($issued_tickets);
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
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
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
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
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
     * Get booking_id value
     * @return int|null
     */
    public function getBooking_id()
    {
        return $this->booking_id;
    }
    /**
     * Set booking_id value
     * @param int $booking_id
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
     */
    public function setBooking_id($booking_id = null)
    {
        // validation for constraint: int
        if (!is_null($booking_id) && !(is_int($booking_id) || ctype_digit($booking_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($booking_id, true), gettype($booking_id)), __LINE__);
        }
        $this->booking_id = $booking_id;
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
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
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
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get link_pdf value
     * @return string|null
     */
    public function getLink_pdf()
    {
        return $this->link_pdf;
    }
    /**
     * Set link_pdf value
     * @param string $link_pdf
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
     */
    public function setLink_pdf($link_pdf = null)
    {
        // validation for constraint: string
        if (!is_null($link_pdf) && !is_string($link_pdf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link_pdf, true), gettype($link_pdf)), __LINE__);
        }
        $this->link_pdf = $link_pdf;
        return $this;
    }
    /**
     * Get link_proforma value
     * @return string|null
     */
    public function getLink_proforma()
    {
        return $this->link_proforma;
    }
    /**
     * Set link_proforma value
     * @param string $link_proforma
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
     */
    public function setLink_proforma($link_proforma = null)
    {
        // validation for constraint: string
        if (!is_null($link_proforma) && !is_string($link_proforma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link_proforma, true), gettype($link_proforma)), __LINE__);
        }
        $this->link_proforma = $link_proforma;
        return $this;
    }
    /**
     * Get bookings_central value
     * @return string|null
     */
    public function getBookings_central()
    {
        return $this->bookings_central;
    }
    /**
     * Set bookings_central value
     * @param string $bookings_central
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
     */
    public function setBookings_central($bookings_central = null)
    {
        // validation for constraint: string
        if (!is_null($bookings_central) && !is_string($bookings_central)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookings_central, true), gettype($bookings_central)), __LINE__);
        }
        $this->bookings_central = $bookings_central;
        return $this;
    }
    /**
     * Get external_reference value
     * @return string|null
     */
    public function getExternal_reference()
    {
        return $this->external_reference;
    }
    /**
     * Set external_reference value
     * @param string $external_reference
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
     */
    public function setExternal_reference($external_reference = null)
    {
        // validation for constraint: string
        if (!is_null($external_reference) && !is_string($external_reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($external_reference, true), gettype($external_reference)), __LINE__);
        }
        $this->external_reference = $external_reference;
        return $this;
    }
    /**
     * Get amadeus_issuance value
     * @return int|null
     */
    public function getAmadeus_issuance()
    {
        return $this->amadeus_issuance;
    }
    /**
     * Set amadeus_issuance value
     * @param int $amadeus_issuance
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
     */
    public function setAmadeus_issuance($amadeus_issuance = null)
    {
        // validation for constraint: int
        if (!is_null($amadeus_issuance) && !(is_int($amadeus_issuance) || ctype_digit($amadeus_issuance))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amadeus_issuance, true), gettype($amadeus_issuance)), __LINE__);
        }
        $this->amadeus_issuance = $amadeus_issuance;
        return $this;
    }
    /**
     * Get issued_tickets value
     * @return Array|null
     */
    public function getIssued_tickets()
    {
        return $this->issued_tickets;
    }
    /**
     * Set issued_tickets value
     * @param Array $issued_tickets
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
     */
    public function setIssued_tickets(Array $issued_tickets = null)
    {
        $this->issued_tickets = $issued_tickets;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\ResultFormalizationBooking
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
