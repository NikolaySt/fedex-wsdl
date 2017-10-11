<?php

namespace EnumType;

/**
 * This class stands for EtdAttributeType EnumType
 * @subpackage Enumerations
 */
class EtdAttributeType
{
    /**
     * Constant for value 'POST_SHIPMENT_UPLOAD_REQUESTED'
     * @return string 'POST_SHIPMENT_UPLOAD_REQUESTED'
     */
    const VALUE_POST_SHIPMENT_UPLOAD_REQUESTED = 'POST_SHIPMENT_UPLOAD_REQUESTED';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_POST_SHIPMENT_UPLOAD_REQUESTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POST_SHIPMENT_UPLOAD_REQUESTED,
        );
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
