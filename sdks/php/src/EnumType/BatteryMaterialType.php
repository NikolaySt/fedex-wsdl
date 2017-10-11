<?php

namespace EnumType;

/**
 * This class stands for BatteryMaterialType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the material composition of a battery or cell.
 * @subpackage Enumerations
 */
class BatteryMaterialType
{
    /**
     * Constant for value 'LITHIUM_ION'
     * @return string 'LITHIUM_ION'
     */
    const VALUE_LITHIUM_ION = 'LITHIUM_ION';
    /**
     * Constant for value 'LITHIUM_METAL'
     * @return string 'LITHIUM_METAL'
     */
    const VALUE_LITHIUM_METAL = 'LITHIUM_METAL';
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
     * @uses self::VALUE_LITHIUM_ION
     * @uses self::VALUE_LITHIUM_METAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LITHIUM_ION,
            self::VALUE_LITHIUM_METAL,
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
