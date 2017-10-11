<?php

namespace EnumType;

/**
 * This class stands for BatteryPackingType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the packing arrangement of a battery or cell with respect to other items within the same package.
 * @subpackage Enumerations
 */
class BatteryPackingType
{
    /**
     * Constant for value 'CONTAINED_IN_EQUIPMENT'
     * @return string 'CONTAINED_IN_EQUIPMENT'
     */
    const VALUE_CONTAINED_IN_EQUIPMENT = 'CONTAINED_IN_EQUIPMENT';
    /**
     * Constant for value 'PACKED_WITH_EQUIPMENT'
     * @return string 'PACKED_WITH_EQUIPMENT'
     */
    const VALUE_PACKED_WITH_EQUIPMENT = 'PACKED_WITH_EQUIPMENT';
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
     * @uses self::VALUE_CONTAINED_IN_EQUIPMENT
     * @uses self::VALUE_PACKED_WITH_EQUIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONTAINED_IN_EQUIPMENT,
            self::VALUE_PACKED_WITH_EQUIPMENT,
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
