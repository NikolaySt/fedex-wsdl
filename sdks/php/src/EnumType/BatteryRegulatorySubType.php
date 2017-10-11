<?php

namespace EnumType;

/**
 * This class stands for BatteryRegulatorySubType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: A regulation specific classification for a battery or cell.
 * @subpackage Enumerations
 */
class BatteryRegulatorySubType
{
    /**
     * Constant for value 'IATA_SECTION_II'
     * @return string 'IATA_SECTION_II'
     */
    const VALUE_IATA_SECTION_II = 'IATA_SECTION_II';
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
     * @uses self::VALUE_IATA_SECTION_II
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IATA_SECTION_II,
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
