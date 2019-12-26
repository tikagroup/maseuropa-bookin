<?php

namespace Maseuropa\Booking\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FAPickupPointWSDO StructType
 * @subpackage Structs
 */
class FAPickupPointWSDO extends AbstractStructBase
{
    /**
     * The id_punto_recogida_asignacion
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id_punto_recogida_asignacion;
    /**
     * The time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $time;
    /**
     * The comments
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The place
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $place;
    /**
     * Constructor method for FAPickupPointWSDO
     * @uses FAPickupPointWSDO::setId_punto_recogida_asignacion()
     * @uses FAPickupPointWSDO::setTime()
     * @uses FAPickupPointWSDO::setComments()
     * @uses FAPickupPointWSDO::setPlace()
     * @param int $id_punto_recogida_asignacion
     * @param string $time
     * @param string $comments
     * @param string $place
     */
    public function __construct($id_punto_recogida_asignacion = null, $time = null, $comments = null, $place = null)
    {
        $this
            ->setId_punto_recogida_asignacion($id_punto_recogida_asignacion)
            ->setTime($time)
            ->setComments($comments)
            ->setPlace($place);
    }
    /**
     * Get id_punto_recogida_asignacion value
     * @return int|null
     */
    public function getId_punto_recogida_asignacion()
    {
        return $this->id_punto_recogida_asignacion;
    }
    /**
     * Set id_punto_recogida_asignacion value
     * @param int $id_punto_recogida_asignacion
     * @return \Maseuropa\Booking\StructType\FAPickupPointWSDO
     */
    public function setId_punto_recogida_asignacion($id_punto_recogida_asignacion = null)
    {
        // validation for constraint: int
        if (!is_null($id_punto_recogida_asignacion) && !(is_int($id_punto_recogida_asignacion) || ctype_digit($id_punto_recogida_asignacion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id_punto_recogida_asignacion, true), gettype($id_punto_recogida_asignacion)), __LINE__);
        }
        $this->id_punto_recogida_asignacion = $id_punto_recogida_asignacion;
        return $this;
    }
    /**
     * Get time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \Maseuropa\Booking\StructType\FAPickupPointWSDO
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Maseuropa\Booking\StructType\FAPickupPointWSDO
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get place value
     * @return string|null
     */
    public function getPlace()
    {
        return $this->place;
    }
    /**
     * Set place value
     * @param string $place
     * @return \Maseuropa\Booking\StructType\FAPickupPointWSDO
     */
    public function setPlace($place = null)
    {
        // validation for constraint: string
        if (!is_null($place) && !is_string($place)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($place, true), gettype($place)), __LINE__);
        }
        $this->place = $place;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\Booking\StructType\FAPickupPointWSDO
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
